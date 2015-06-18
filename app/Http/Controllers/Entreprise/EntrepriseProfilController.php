<?php namespace App\Http\Controllers\Entreprise;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

use App\Entreprise;
use App\Http\Requests\entreprise\ProfilEntrepriseRequest;

class EntrepriseProfilController extends Controller {
    


    /**
     * Affiche les entreprises en attente de validation
     *
     * @return View
     */
    public function getEntrepriseProfil()
    {
        $array['entreprise'] = Auth::user()->user;
        return View::make('entreprise.profil')->with($array);
    }


    /**
     * Traitement du formulaire de profil
     *
     * @return Redirect
     */
    public function postEntrepriseProfil(ProfilEntrepriseRequest $request)
    {

        $entreprise = Entreprise::find(Auth::user()->user->id);

        $entreprise->nom = Input::get('nom');
        $entreprise->description = Input::get('description');
        $entreprise->siret = Input::get('siret');
        $entreprise->taille = Input::get('taille');
        $entreprise->lieu = Input::get('lieu');
        $entreprise->fax = Input::get('fax');
        $entreprise->secteur = Input::get('secteur');
        $entreprise->telephone = Input::get('telephone');
        $entreprise->sociaux = Input::get('sociaux');
        $entreprise->site = Input::get('site');

        /* La transaction permet d'englober un ensemble d'actions. Soit l'ensemble se termine,
           soit l'ensemble de ces actions sont annulées */
        DB::transaction(function() use ($request, $entreprise) {
            if ($request->hasFile('logo')) {
                $file = $request->file('logo');
                $ext = $file->getClientOriginalExtension();
                $logo = 'logo.' . $ext;
                $file->move('uploads/entreprises/' . $entreprise->nom, $logo);
                $entreprise->logo = $logo;
            }
        });

        if($entreprise->save())
            return Redirect::refresh()->with('flash_success', 'Modification Profil enregistré!')->withInput();
    }

}
