<?php namespace App\Http\Controllers\Etudiant;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\EtudiantRepository;
use App\Repositories\OffreStageRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use App\User;


class EtudiantAccueilController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | Accueil Etudiant Controller
    |--------------------------------------------------------------------------
    |
    | Ce controller permet d'afficher information importante des l'accueil de l'etudiant
    | A savoir : son statut (en recherche de stage ou pas) et suggestion d'offre de stage
    |
    */

    protected $etudiantRepository;
    protected $offreStageRepository;
    protected $etudiant;

	public function __construct(EtudiantRepository $etudiantRepository, OffreStageRepository $offreStageRepository)
    {
        $this->etudiantRepository = $etudiantRepository;
        $this->offreStageRepository = $offreStageRepository;
        $this->etudiant = Auth::user()->user;
    }

    /**
     * Retourne la vue d'accueil de l'étudiant
     *
     * @return View
     */
    public function showAccueil(UserRepository $userRepository)
    {
        $recherche = $this->etudiantRepository->getRecherche($this->etudiant->id);
        $suggestions = $this->getSuggestions();
        $responsables = $userRepository->getListModerateurs($this->etudiant->promotion_id);

        return view('etudiant.home', compact('recherche', 'suggestions', 'responsables'));
    }

    /**
     * Modification du statut de recherche de l'étudiant
     */
    public function setRecherche()
    {
        if($this->etudiantRepository->setRecherche($this->etudiant->id)){
            return Redirect::back();
        }
    }

    /**
     * Retourne la liste des suggestions pour l'étudiant courant
     *
     * @return mixed
     */
    private function getSuggestions()
    {
        return $this->offreStageRepository->getOffresMatchCompetences(
            $this->etudiantRepository->getCompetences($this->etudiant->id),
            $this->etudiant
        );
    }
}
