<?php namespace App\Repositories\Impl;


use App\OffreStage;
use App\Repositories\OffreStageRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
     * Retourne tableau des offres de stages qui sont valide et non pourvu (stagiaire_id == null)
     * Chaque offres possède un tableau de ses competences
     * L'ensemble est classée par ordre décroissante selon la date de la dernière modification de l'offre.
     *
     * @return mixed
     */
    public function getOffresAPourvoirWithCompetences() {
        return OffreStage::whereValide(1)
            ->whereNull('stagiaire_id')
            ->with('competences')
            ->orderBy('updated_at', 'desc')
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
     * Retourne nombre de stage que le moderateur de promotion doit valider
     * @return mixed
     */
    public function getCountOffreStageValiderParPromotionModerateur() {
        return OffreStage::where('valide', 0)
            ->whereHas('promotion.moderateurs', function($q){
                $q->where('moderateurs.id', Auth::user()->user->id);
            })
            ->count();
    }
}
