<?php namespace App\Http\Controllers\Moderateur;

use App\OffreStage;
use App\Repositories\CompetenceRepository;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests\OffreStageRequest;
use App\Entreprise;
use App\Http\Controllers\OffreStageController;

class ModerateurOffreStageController extends OffreStageController {

    /**
     * Affiche la liste de l'ensemble des offres de stages du moderateur
     *
     * @return Response
     */
    public function index()
    {
        $array = parent::index();
        return View::make('moderateur.liste_offre_stage')->with($array);
    }

    /**
     * Afficher une offre de stage
     * @param $id
     */
    public function show($id)
    {
        $array = parent::show($id);
        return View::make('moderateur.afficher_offre')->with($array);
    }

	/**
	 * Affiche le formulaire de creation d'une nouvelle offre de stage
	 *
	 * @return Response
	 */
	public function create()
	{
        $array = parent::create();
        $array['entreprises'] = Entreprise::all();
		return View::make('moderateur.creation_offre_stage')->with($array);
	}

	/**
	 * Enregistre la nouvelle offre de stage en BDD
	 * @param OffreStageRequest verifie la validite de l'offre de stage
     * @param $valide si offre est valide dès sa creation
     * dans le cas moderateur toujours true
     *
	 * @return Response
	 */
	public function store(OffreStageRequest $request, OffreStage $offre, CompetenceRepository $competence)
	{
        $offre->valide = true;

        $id = Input::get('entreprise_id');

        if(!empty($id)){
            if(parent::isIntPositif($id)) {
                $offre->entreprise_id = $id;
            } else {
                return Redirect::back()->withInput()->withErrors("L'entreprise choisie n'est pas valide");
            }
        }

		if (parent::store(new OffreStageRequest(), $offre, $competence)) {
			return Redirect::to('moderateur/offre-stage')->with('flash_success', 'Offre de stage publié!');
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
            return View::make('moderateur.edition_offre_stage', $array);
        } else {
            return View::make('moderateur.layout')->with('flash_error', 'Vous n\'avez pas le droit de modifier cette offre de stage!');
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
            return Redirect::to('moderateur/offre-stage')->with('flash_success', 'Modification de l\'offre de stage effectuée!');;
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
            return Redirect::to('moderateur/offre-stage')->with('flash_success', 'Suppression de l\'offre de stage effectuée!');
        } else {
            return Redirect::to('moderateur/offre-stage')->with('flash_error', 'Erreur c\'est produite l\'offre de stage n\'a pu être effacée!');
        }
	}
}