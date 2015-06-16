<?php namespace App\Repositories\Impl;


use App\Competence;
use App\Repositories\CompetenceRepository;

class CompetenceRepositoryImpl implements CompetenceRepository {

    /**
     * Méthode utilisée pour sauvegarder une liste de compétences. Le paramètre
     * relation permet de retrouver la bonne table pivot pour la synchronisation.
     *
     * @param $competences
     * @param $relation
     */
    public function saveMultipe($competences, $relation)
    {
        $array = [];

        if($competences != null) {
            foreach ($competences as $competence) {
                $comp = Competence::updateOrCreate(['nom' => $competence]);
                array_push($array, $comp->id);
            }
        }

        return $relation->competences()->sync($array);

    }

    /**
     * Retourne l'ensemble des competences
     */
    public function all() {
        return Competence::all();
    }
}