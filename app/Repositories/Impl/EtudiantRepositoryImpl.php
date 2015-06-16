<?php namespace App\Repositories\Impl;


use App\Etudiant;
use App\Repositories\EtudiantRepository;
use Illuminate\Support\Facades\DB;

class EtudiantRepositoryImpl implements EtudiantRepository {


    /**
     * Méthode utilisée pour modifier le statut de recherche de
     * l'étudiant (recherche active ou non)
     *
     * @param $id
     * @return bool
     */
    public function setRecherche($id, $value = null)
    {
        $etudiant = Etudiant::find($id);

        if($value === 1 || $value === 0) {
            $etudiant->recherche = $value;
        }
        else {
            $etudiant->recherche = ($etudiant->recherche == 1) ? 0 : 1;
        }

        return $etudiant->save();
    }


    /**
     * Retourne le statut de recherche de l'étudiant
     *
     * @param $id
     * @return mixed
     */
    public function getRecherche($id)
    {
        return Etudiant::find($id)->recherche;
    }


    /**
     * Retourne les compétences d'un étudiant
     *
     * @param $id
     * @return mixed
     */
    public function getCompetences($id)
    {
        return Etudiant::find($id)
            ->leftJoin('competence_etudiant', 'etudiant_id', '=', 'etudiants.id')
            ->leftJoin('competences', 'competence_id','=','competences.id')
            ->lists('competence_id');
    }


    /**
     * Retourne tableau des etudiants en recherche de stage
     * Possedant :
     *      - id leur id
     *      - name leur nom
     *      - promotion_id leur promotion id (ou null)
     *      - promo le nom de leur promotion
     *      - specialite_id leur specialite id (ou null)
     *      - spec le nom de leur specialite
     * Chaque etudiant possède un tableau de ses competences
     * L'ensemble est classée par ordre décroissante selon la date de la dernière modification de l'offre.
     * Permet de mettre en avant les personnes les plus presentes sur la plateforme.
     * @return mixed
     */
    public function getEtudiantEnRechercheDeStage() {
        return Etudiant::whereRecherche('1')
            ->whereUserType('App\Etudiant')
            ->join('users', 'users.user_id', '=', 'etudiants.id')
            ->leftJoin('promotions', 'promotions.id', '=', 'etudiants.promotion_id')
            ->leftJoin('specialites', 'specialites.id', '=', 'etudiants.specialite_id')
            ->select('etudiants.promotion_id AS promotion_id ',
                'etudiants.specialite_id AS specialite_id',
                'users.name AS name', 'promotions.nom AS promo',
                'specialites.nom AS spec', 'etudiants.id AS id')
            ->with('competences')
            ->get();
    }
    /**
     * Retourne un tableau contenant pour chaque promotion :
     *      -promotion_id : de la promotion
     *      -total_sans_stage : nombre d'etudiant sans stage (en mode recherche)
     *      -total_etudiant : nombre totale etudiant de la promotion
     * @param $promotion tableau id des promotions concernées
     * @return mixed
     */
    public function getStatistiqueEtudiantParPromotion($promotion) {
        return Etudiant::select('promotion_id',
            DB::raw('count(recherche) as total_sans_stage'),
            DB::raw('count(*) as total_etudiant'))
            ->whereIn('promotion_id', $promotion)
            ->groupBy('promotion_id')
            ->orderBy('promotion_id')
            ->get();
    }
}