<?php  namespace App\Repositories;


interface OffreStageRepository {

    /**
     * Retourne l'ensemble des offres de stage
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function all();

    /**
     * Retourne la liste des offres qui contiennent les compétences en paramètre. Cette liste
     * est classée par ordre décroissante selon la date de la dernière modification de l'offre.
     * Les offres de la liste sont valides et si le paramètre $user est non null, on vérifie
     * aussi qu'elles correspondent à la bonne promotion.
     *
     * @param $competences
     * @param null $user
     * @return mixed
     */
    public function getOffresMatchCompetences($competences, $user = null);

    /**
     * Retourne tableau des offres de stages qui sont valide et non pourvu (stagiaire_id == null)
     * Chaque offres possède un tableau de ses competences
     * L'ensemble est classée par ordre décroissante selon la date de la dernière modification de l'offre.
     *
     * @return mixed
     */
    public function getOffresAPourvoirWithCompetences();

    /**
     * Retourne un tableau contenant pour chaque promotion :
     *      -promotion_id : de la promotion
     *      -nb_offre_stage : nombre de stage rataché à la promotion a pourvoir (disponible cad stagiaire_id == null)
     *      -postuler : nombre totale candidature d'étudiant de la promotion en mode recherche de stage (recherche == 1)
     * @param $promotion tableau id des promotions concernées
     * @return mixed
     */
    public function getStatistiqueOffreStageParPromotion($promotion);


    /**
     * Retourne nombre de stage que le moderateur de promotion doit valider
     * @return mixed
     */
    public function getCountOffreStageValiderParPromotionModerateur();

}
