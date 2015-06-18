<?php namespace App\Http\Controllers\Etudiant;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Request;

use App\Repositories\CompetenceRepository;
use App\Repositories\PromotionRepository;
use App\Repositories\OffreStageRepository;

class EtudiantRechercheStageController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | Recherche stage Controller
    |--------------------------------------------------------------------------
    |
    | Ce controller permet la recherche des stages par l'etudiant
    |
    */

    /**
     * Crée une nouvelle instance du controller de recherche stage par l'etudiant
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Retourne :
     *      -l'ensemble des stages(valide, non pourvu et avec competences)
     *      -l'ensemble des competences
     *      -l'ensemble des promotions avec specialites
     * le tout au format Json si requête Json sinon retourne accueil message erreur
     * @return View
     */
    public function getAllStage(OffreStageRepository $offreStageRepository,
                                CompetenceRepository $competenceRepository,
                                PromotionRepository $promotionRepository)
    {
        $array['offres'] = $offreStageRepository->getOffresAPourvoirWithCompetences();
        $array['competences'] = $competenceRepository->all();
        $array['promotions'] = $promotionRepository->promotionWithSpecialite();

        if (Request::wantsJson()) {
            return Response::json($array);
        } else {
            return  Redirect::route('accueil-etudiant')->with('flash_error', 'Accès refusée!!!');
        }

    }

}
