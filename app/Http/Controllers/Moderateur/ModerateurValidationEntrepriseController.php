<?php namespace App\Http\Controllers\Moderateur;

use App\Http\Controllers\Controller;
use App\Repositories\EntrepriseRepository;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;

use App\User;
use App\Http\Requests\Moderateur\ValidationEntrepriseRequest;

class EntrepriseValidationController extends Controller {

    //Repository du modèle des entreprises
    protected $entrepriseRepository;

    public function __construct(EntrepriseRepository $entrepriseRepository)
    {
        $this->entrepriseRepository = $entrepriseRepository;
    }


    /**
     * Affiche les entreprises en attente de validation
     *
     * @return View
     */
    public function getEntrepriseValidation()
    {
        $array['entreprises'] = $this->entrepriseRepository->getAttenteValidation();
        return View::make('moderateur/validation_entreprise')->with($array);
    }


    /**
     * Traitement du formulaire de validation
     *
     * @return Redirect
     */
    public function postEntrepriseValidation(ValidationEntrepriseRequest $request)
    {
        $user = User::find(Input::get('_id'));
        $user->valide = 1;
        $user->save();

        return Redirect::refresh()->with('flash_success', 'L\'entreprise a bien été validée');
    }
}
