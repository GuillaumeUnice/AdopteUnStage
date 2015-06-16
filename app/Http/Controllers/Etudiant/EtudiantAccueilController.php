<?php namespace App\Http\Controllers\Etudiant;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\EtudiantRepository;
use App\Repositories\OffreStageRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use App\User;


class EtudiantAccueilController extends Controller {

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
    public function showAccueil()
    {
        $recherche = $this->etudiantRepository->getRecherche($this->etudiant->id);
        $suggestions = $this->getSuggestions();
        $responsables = $this->getListModerateurs();

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


    /**
     * Retourne la liste des modérateurs
     *
     * @return mixed
     */
    private function getListModerateurs()
    {
        return User::where('user_type', 'App\Moderateur')->where('role_id', '2')
            ->join('moderateur_promotion', 'moderateur_id', '=', 'users.user_id')
            ->join('promotions', 'promotions.id', '=', 'moderateur_promotion.promotion_id')
            ->where('promotion_id', $this->etudiant->promotion_id)
            ->selectRaw('users.name,users.email,moderateur_promotion.moderateur_id, moderateur_promotion.promotion_id,promotions.nom AS promotion_nom')
            ->get();
    }

}
