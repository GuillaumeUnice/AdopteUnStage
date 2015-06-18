<?php namespace App\Repositories\Impl;


use App\Etudiant;
use App\OffreStage;
use App\Repositories\OffreStageRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class OffreStageRepositoryImpl implements OffreStageRepository{


    /**
     * Retourne l'ensemble des offres de stage
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function all()
    {
        return OffreStage::all();
    }


    /**
     * Retourne true si l'offre est validée, false sinon
     *
     * @param $id
     * @return bool
     */
    public function isValide($id)
    {
        $offre = OffreStage::find($id)->valide;
        return ($offre == 1);
    }

    /**
     * Retourne la liste du nombre de candidatures pour chaque offre.
     *
     * @return mixed
     */
    public function getNbCandidats()
    {
        return DB::table('etudiant_offre_stage')
            ->select('offre_stage_id', DB::raw('count(*) as total'))
            ->groupBy('offre_stage_id')
            ->lists('total', 'offre_stage_id');
    }


    /**
     * Retourne la liste des stagiaires id pour chacune des offres.
     *
     * @return mixed
     */
    public function getStagiaireId()
    {
        return OffreStage::lists('stagiaire_id', 'offres_stages.id');
    }


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
    public function getOffresMatchCompetences($competences, $user = null)
    {
        return OffreStage::where('valide', '1')
            ->where(function($q) use ($user) {
                if($user != null) $q->where('promotion_id', $user->promotion_id);
            })
            ->whereHas('competences', function($q) use ($competences){
                $q->whereIn('competences.id', $competences);
            })
            ->groupBy('title')
            ->orderBy('updated_at', 'desc')
            ->get();
    }

    /**
     * Retourne tableau des offres de stages qui sont valide non pourvu (stagiaire_id == null)
     * et dont etudiant n'a pas candidatee
     * Chaque offres possède un tableau de ses competences
     * L'ensemble est classée par ordre décroissante selon la date de la dernière modification de l'offre.
     *
     * @return mixed
     */
    public function getOffresAPourvoirWithCompetences() {
        //recupere ensemble offre de stage dont etudiant a candidatee
        $offre_stage = Etudiant::whereId(Auth::user()->user->id)
            ->with('offre_stages')->first()->offre_stages;
        $id_offre_stage = array();
        // range dans un tableau les id de ces offres de stage
        foreach ($offre_stage as $value){
            array_push($id_offre_stage, $value->id);
        }

        return OffreStage::whereValide(1)
         ->whereNull('stagiaire_id')
         ->with('competences')
         ->whereNotIn('id', $id_offre_stage)// supprimer les offres auquelles etudiant a deja candidatees
         ->orderBy('offre_stages.updated_at', 'desc')
         ->get();
    }

    /**
     * Retourne un tableau contenant pour chaque promotion :
     *      -promotion_id : de la promotion
     *      -nb_offre_stage : nombre de stage rataché à la promotion a pourvoir (disponible cad stagiaire_id == null)
     *      -postuler : nombre totale candidature d'étudiant de la promotion en mode recherche de stage (recherche == 1)
     * @param $promotion tableau id des promotions concernées
     * @return mixed
     */
    public function getStatistiqueOffreStageParPromotion($promotion) {
        return OffreStage::
        select('promotion_id', DB::raw('count(distinct offre_stages.id) as nb_offre_stage'),
            DB::raw('count(etudiant_offre_stage.id) as postuler'))
            ->join('etudiant_offre_stage', 'etudiant_offre_stage.offre_stage_id', '=', 'offre_stages.id')
            ->whereIn('promotion_id', $promotion)
            ->whereValide('1')
            ->whereNull('stagiaire_id')
            ->groupBy('promotion_id')
            ->orderBy('promotion_id')
            ->get();
    }

    /**
     * Récupère la liste des spécialités relatives à la promotions
     * à laquelle l'offre est rattachée.
     *
     * @param $id_offre
     * @return mixed
     */
    public function getSpecialitesPromotionOffre($id_offre)
    {
        $result = OffreStage::where('offre_stages.id',$id_offre)
            ->join('promotion_specialite', 'promotion_specialite.promotion_id', '=', 'offre_stages.promotion_id')
            ->join('specialites', 'specialites.id', '=', 'promotion_specialite.specialite_id')
            ->select('promotion_specialite.specialite_id as id_specialite', 'specialites.nom as nom_specialite')
            ->lists('nom_specialite','id_specialite');

        return $result;
    }


    /**
     * Met à jour les spécialités/parcours attachés à une offre
     *
     * @param $id_offre
     * @param $input
     * @return mixed
     */
    public function updateSpecialitesPromotionOffre($id_offre, $input)
    {
        $result = OffreStage::find($id_offre)->specialite()->sync((isset($input)?$input:[]));
        return isset($result);
    }


    /**
     * Retourne nombre de stage que le moderateur de promotion doit valider
     * @return mixed
     */
    public function getCountOffreStageValiderParPromotionModerateur()
    {
        return OffreStage::where('valide', 0)
            ->whereHas('promotion.moderateurs', function($q){
                $q->where('moderateurs.id', Auth::user()->user->id);
            })
            ->count();
    }

    /**
     * Retoure la liste des offres de stages dont la promotion associée
     * est rattachée au modérateur.
     *
     * @return mixed
     */
    public function getOffreStageModerateurAvecEntreprises()
    {
        return OffreStage::where('valide', 0)
            ->whereHas('promotion.moderateurs', function($q){
                $q->where('moderateurs.id', Auth::user()->user->id);
            })
            ->with('entreprise')
            ->get();
    }

    /**
     * get toutes les offres de stages que l'etudiant a déjà faites
     *
     * @param $id id de l'etudiant
     * @return mixed
     */
    public function getStagesFaits($id){
        return DB::table('offre_stages')->where('stagiaire_id',$id)
            ->join('entreprises','entreprise_id','=','entreprises.id')
            ->selectRaw('offre_stages.id As id,entreprise_id,title,nom_contact,email,tel,nom As entreprise_nom, feedback_id,stagiaire_id,valide')
            ->get();

    }

    /**
     * renvoyer tous les offres de stages que l'etudiant a postulés
     *
     * @param $id id de l'etudiant
     * @return mixed
     */
    public function getStagePostules($id){
        return DB::table('etudiant_offre_stage')->where('etudiant_id',$id)
            ->join('offre_stages','etudiant_offre_stage.offre_stage_id','=','offre_stages.id')
            ->selectRaw('etudiant_offre_stage.etudiant_id,etudiant_offre_stage.offre_stage_id,offre_stages.entreprise_id,
                        offre_stages.title,offre_stages.nom_contact,offre_stages.email,offre_stages.tel,offre_stages.valide')
            ->join('entreprises','entreprise_id','=','entreprises.id')
            ->selectRaw(' offre_stage_id As id,entreprise_id,
                        title,nom_contact,email,tel,entreprises.nom As entreprise_nom,feedback_id,stagiaire_id,valide')->get();
    }

    /**
     * renvoyer information concernant un stage
     *
     * @param $id id de l'entreprise a laquelle est ratachee l'offre
     * @return mixed
     */
    public function getInfosStage($id) {
        return OffreStage::leftJoin('feedbacks', 'feedbacks.id', '=', 'offre_stages.feedback_id')
            ->leftJoin('users', 'users.user_id', '=', 'offre_stages.stagiaire_id')
            ->where('entreprise_id', $id)
            ->where('users.user_type', 'App\Etudiant')
            ->select('feedbacks.titre', 'feedbacks.contenu', 'feedbacks.recrutement_feedback', 'feedbacks.isOuvert', 'users.name', 'users.email')->get();

    }
}
