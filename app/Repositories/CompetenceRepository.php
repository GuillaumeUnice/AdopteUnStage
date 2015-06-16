<?php namespace App\Repositories;


interface CompetenceRepository {

    /**
     * Méthode utilisée pour sauvegarder une liste de compétences
     * @param $competences
     */
    public function saveMultipe($competences, $relation);

    /**
     * Retourne l'ensemble des competences
     */
    public function all();
}