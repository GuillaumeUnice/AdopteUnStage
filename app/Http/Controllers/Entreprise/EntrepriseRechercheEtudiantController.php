<?php namespace App\Http\Controllers\Entreprise;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;

use App\Repositories\CompetenceRepository;
use App\Repositories\PromotionRepository;
use App\Repositories\EtudiantRepository;


class EntrepriseRechercheEtudiantController extends Controller {



    /**
     * Retourne :
     *      -l'ensemble des etudiants en recherche de stage(recherche == 1)
     *      -l'ensemble des competences
     *      -l'ensemble des promotions avec specialites
     * le tout au format Json si requête Json sinon retourne accueil message erreur
     * @return View
     */
    public function getAllEtudiant(EtudiantRepository $etudiantRepository,
                                   CompetenceRepository $competenceRepository,
                                   PromotionRepository $promotionRepository)
    {
        $array['etudiants'] = $etudiantRepository->getEtudiantEnRechercheDeStage();
        $array['competences'] = $competenceRepository->all();
        $array['promotions'] = $promotionRepository->promotionWithSpecialite();

        if (Request::wantsJson()) {
            return Response::json($array);
        } else {
            return  Redirect::route('accueil-entreprise')->with('flash_error', 'Accès refusée!!!');
        }
    }

}
