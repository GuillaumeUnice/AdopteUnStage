<?php namespace App\Http\Controllers\Etudiant;

use App\OffreStage;
use App\Repositories\CompetenceRepository;
use App\Repositories\EtudiantRepository;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests\OffreStageRequest;
use App\Entreprise;
use App\Http\Controllers\OffreStageController;

class EtudiantOffreStageController extends OffreStageController {

    protected $etudiantRepository;

    public function __construct(EtudiantRepository $etudiantRepository)
    {
        $this->etudiantRepository = $etudiantRepository;
    }

    /**
     * Affiche la liste de l'ensemble des offres de stages de l'etudiant
     *
     * @return Response
     */
    public function index()
    {
        $array = parent::index();
        return View::make('etudiant.ajouter_mon_stage')->with($array);
    }

    /**
     * Affichage d'une offre de stage
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        $array = parent::show($id);
        return View::make('etudiant.afficher_offre')->with($array);
    }

	/**
	 * Affiche le formulaire de creation d'une nouvelle offre de stage
	 *
	 * @return Response
	 */
	public function create()
	{
        $array = parent::create();
        $array['etudiant'] = Auth::user()->user->select('promotion_id', 'specialite_id')->first();
        $array['entreprises'] = Entreprise::all();
		return View::make('etudiant.creation_offre_stage')->with($array);
	}

	/**
	 * Enregistre la nouvelle offre de stage en BDD
	 * @param OffreStageRequest verifie la validite de l'offre de stage
     * @param $valide si offre est valide dès sa creation
     * dans le cas etudiant toujours true
     *
	 * @return Response
	 */
	public function store(OffreStageRequest $request, OffreStage $offre, CompetenceRepository $competence)
	{
        $offre->valide = false;

        $id = Input::get('entreprise_id');

        if(!empty($id)){
            if(parent::isIntPositif($id)) {
                $offre->entreprise_id = $id;
            } else {
                return Redirect::back()->withInput()->withErrors("L'entreprise choisie n'est pas valide");
            }
        }

        $offre->stagiaire_id = Auth::user()->user->id;
        $this->etudiantRepository->setRecherche($offre->stagiaire_id, 0);

		if (parent::store(new OffreStageRequest(), $offre, $competence)) {
			return Redirect::to(route('historique-feedback'))->with('flash_success', 'Offre de stage publié!');
		} else {
			return Redirect::back()->withInput()->withErrors('Publier une offre de stage échoué!');
		}

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $array = parent::edit($id);
        if($array['offre']->user_id == Auth::user()->id) {
            return View::make('etudiant.edition_offre_stage')->with($array);
        } else {
            return View::make('etudiant.layout')->with('flash_error', 'Vous n\'avez pas le droit de modifier cette offre de stage!');
        }
	}

	/**
	 * Update l'offre de stage en BDD
	 * @param  int  $id id de l'offre de stage
     *
	 * @return Response
	 */
	public function update(OffreStageRequest $request,$id, CompetenceRepository $competence)
	{
        if(parent::update($request, $id, $competence)) {
            return Redirect::to(route('historique-feedback'))->with('flash_success', 'Modification de l\'offre de stage effectuée!');;
        } else {
            return Redirect::back()->withInput()->withErrors('Update une offre de stage échoué!');
        }
	}

	/**
	 * Supprimer une offre de stage
	 *
	 * @param  int  $id id offre de stage
	 * @return Response
	 */
	public function destroy($id)
	{
        if(parent::destroy($id)) {
            return Redirect::to('etudiant/offre-stage')->with('flash_success', 'Suppression de l\'offre de stage effectuée!');
        } else {
            return Redirect::to('etudiant/offre-stage')->with('flash_error', 'Erreur c\'est produite l\'offre de stage n\'a pu être effacée!');
        }
	}
}