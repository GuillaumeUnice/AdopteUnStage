<?php namespace App\Http\Controllers\Moderateur;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;

use App\User;
use App\Http\Requests\Moderateur\ValidationEntrepriseRequest;

class EntrepriseValidationController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | Validation Entreprise Controller
    |--------------------------------------------------------------------------
    |
    | Ce controller permet la validation des entreprise par les moderateurs
    |
    */

    /**
     * Crée une nouvelle instance du controller de validation d'ENtreprise
     *
     * @return void
     */
    public function __construct()
    {
      // $this->middleware('auth.moderateur');
    }

    /**
     * Affiche les entreprises en attente de validation
     *
     * @return View
     */
    public function getEntrepriseValidation(){
        //die(User::whereValide(0)->get());

        //$array['entreprises'] = array(array('nom' => 'nom1'), array( 'nom' => 'nom2'));



        $array['entreprises'] = User::whereValide(0)->join('entreprises', 'entreprises.id', '=', 'users.user_id')
                ->selectRaw( 'entreprises.nom, entreprises.lieu, entreprises.siret, entreprises.telephone, entreprises.description,
                    users.id, users.email, users.name')->get();

       // die(var_dump($array['entreprises']));
        return View::make('moderateur/validation_entreprise')->with($array);
    }

    /**
     * Traitement du formulaire de validation
     *
     * @return Redirect
     */
    public function postEntrepriseValidation(ValidationEntrepriseRequest $request){
        $user = User::find(Input::get('_id'));
        $user->valide = 1;
        $user->save();

        return Redirect::refresh()->with('flash_success', 'L\'entreprise a bien été validée');
    }
}
