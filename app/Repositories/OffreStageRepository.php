<?php  namespace App\Repositories;


interface OffreStageRepository {

    /**
     * Retourne l'ensemble des offres de stage
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function all();


    /**
     * Retourne true si l'offre est validée, false sinon
     *
     * @param $id
     * @return bool
     */
    public function isValide($id);


    /**
     * Retourne la liste du nombre de candidatures pour chaque offre.
     *
     * @return mixed
     */
    public function getNbCandidats();


    /**
     * Retourne la liste des stagiaires id pour chacune des offres.
     *
     * @return mixed
     */
    public function getStagiaireId();

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
     * Récupère la liste des spécialités relatives à la promotions
     * à laquelle l'offre est rattachée.
     *
     * @param $id_offre
     * @return mixed
     */
    public function getSpecialitesPromotionOffre($id_offre);


    /**
     * Met à jour les spécialités/parcours attachés à une offre
     *
     * @param $id_offre
     * @param $input
     */
    public function updateSpecialitesPromotionOffre($id_offre, $input);

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


    /**
     * Retoure la liste des offres de stages dont la promotion associée
     * est rattachée au modérateur.
     *
     * @return mixed
     */
    public function getOffreStageModerateurAvecEntreprises();


    /**
     * get toutes les offres de stages que l'etudiant a déjà faites
     *
     * @param $id id de l'etudiant
     * @return mixed
     */
    public function getStagesFaits($id);


    /**
     * renvoyer tous les offres de stages que l'etudiant a postulés
     *
     * @param $id id de l'etudiant
     * @return mixed
     */
    public function getStagePostules($id);

    /**
     * renvoyer information concernant un stage
     *
     * @param $id id de l'entreprise a laquelle est ratachee l'offre
     * @return mixed
     */
    public function getInfosStage($id);

}
