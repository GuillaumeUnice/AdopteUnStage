<?php namespace App\Repositories;


interface EtudiantRepository {

    /**
     * Méthode utilisée pour modifier le statut de recherche de
     * l'étudiant (recherche active ou non)
     *
     * @return mixed
     */
    public function setRecherche($id, $value = null);

    /**
     * Retourne le statut de recherche de l'étudiant
     *
     * @param $id
     * @return mixed
     */
    public function getRecherche($id);


    /**
     * Retourne les compétences d'un étudiant
     *
     * @param $id
     * @return mixed
     */
    public function getCompetences($id);

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
    public function getEtudiantEnRechercheDeStage();

    /**
     * Retourne un tableau contenant pour chaque promotion :
     *      -promotion_id : de la promotion
     *      -total_sans_stage : nombre d'etudiant sans stage (en mode recherche)
     *      -total_etudiant : nombre totale etudiant de la promotion
     * @param $promotion tableau id des promotions concernées
     * @return mixed
     */
    public function getStatistiqueEtudiantParPromotion($promotion);

}
