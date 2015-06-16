<?php namespace App\Http\Controllers\Entreprise;

use App\Http\Controllers\OffreStageController;
use App\Promotion;
use App\Repositories\CompetenceRepository;
use App\User;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

use App\OffreStage;
use App\Http\Requests\OffreStageRequest;

class EntrepriseOffreStageController extends OffreStageController {

	public function index()
	{
        $array = parent::index();
        return View::make('entreprise.liste_offre_stage')->with($array);
	}

    /**
     * Affichage d'une offre de stage
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        $array = parent::show($id);
        return View::make('entreprise.afficher_offre')->with($array);
    }


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $array = parent::create();
        return View::make('entreprise.creation_offre_stage')->with($array);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(OffreStageRequest $request, OffreStage $offre, CompetenceRepository $competence)
	{
        $offre->valide = false;
        $offre->entreprise_id = Auth::user()->user->id;

        if (parent::store(new OffreStageRequest(), $offre, $competence)) {
            return Redirect::to('entreprise/offre-stage')->with('flash_success', 'Offre de stage publié!');
        } else {
            return Redirect::back()->withInput()->withErrors('La publication à échoué!');
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

        if($array['offre']->valide == 1) {
            return Redirect::to('entreprise/offre-stage')->with('flash_error', 'Modification de l\'offre de stage impossible car déjà validée!');
        }
		return View::make('entreprise.edition_offre_stage')->with($array);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(OffreStageRequest $request, $id, CompetenceRepository $competence)
	{
        if(parent::update($request, $id, $competence)) {
            return Redirect::to('entreprise/offre-stage')->with('flash_success', 'Modification de l\'offre de stage effectuée!');;
        } else {
            return Redirect::back()->withInput()->withErrors('Update une offre de stage échoué!');
        }
    }


		
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        if(parent::destroy($id)) {
            return Redirect::to('entreprise/offre-stage')->with('flash_success', 'Suppression de l\'offre de stage effectuée!');
        } else {
            return Redirect::to('entreprise/offre-stage')->with('flash_error', 'Erreur c\'est produite l\'offre de stage n\'a pu être effacée!');
        }
	}
}