<?php namespace App\Http\Controllers\Etudiant;

use App\Http\Controllers\Controller;
use App\Langue;
use App\ProfileEtudiant;
use App\Specialite;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

use App\Etudiant;
use App\Http\Requests\Etudiant\ProfilEtudiantRequest;
use App\Promotion;

class EtudiantProfilController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | Profil Etudiant Controller
    |--------------------------------------------------------------------------
    |
    | Ce controller permet la gestion des profils d'etudiant
    |
    */

    /**
     * Crée une nouvelle instance du controller de profil d'etudiant
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Affiche le profil étudiant
     *
     * @return View
     */
    public function getEtudiantProfil()
    {
        $array['etudiant'] = Auth::user()->user;
        $array['promotions'] = Promotion::with('specialites')->get()->toJson();

        //Si aucune promotion n'est liée à l'étudiant
        if(isset($array['etudiant']->promotion_id))
            $array['etudiant_promotion'] = Auth::user()->user->promotion()->first();

        $array['profile'] = ProfileEtudiant::where('etudiant_id',$array['etudiant']->id)->first();

        //Si aucune promotion n'est liée à l'étudiant
        if(isset($array['etudiant_promotion']))
            $array['specialites'] =Promotion::find($array['etudiant']->promotion_id)->specialites()->get();

        $array['etudiant_specialite'] = Auth::user()->user->specialite()->first();

        //calculer le pourcentage du profil de l'etudiant
        $index=0;
        if($array['etudiant']->promotion_id)
            $index+=1;
        if($array['etudiant']->specialite_id)
            $index+=1;
        if($array['etudiant']->cv)
            $index+=1;
        if($array['etudiant']->website)
            $index+=1;
        if($array['etudiant']->social)
            $index+=1;
        $array['pourcentage']=$index/5;

        return View::make('etudiant.profil')->with($array);
    }

    /**
     * Traitement du formulaire de profil
     *
     * @return Redirect
     */
    public function postEtudiantProfil(ProfilEtudiantRequest $request)
    {

        // Mise à jour des données de l'étudiant
        Etudiant::updateOrCreate(
            [
                'id' => Auth::user()->user->id,
            ],
            [
                'promotion_id'  => Input::get('promotion'),
                'specialite_id' => Input::get('specialite'),
                'website'       => Input::get('website'),
                'social'        => Input::get('social'),
            ]
        );

        // Mise à jour des données relatives au profil
        // de l'étudiant
        ProfileEtudiant::updateOrCreate(
            [
                'etudiant_id' => Auth::user()->user->id,
            ],
            [
                'professionnel' => Input::get('parcours_pro'),
                'education'     => Input::get('parcours_sco'),
                'langue_id'     => Langue::all()->first()->id,
            ]
        );

        return Redirect::refresh()->with('flash_success', 'Modification Profil enregistré!')->withInput();

    }
}
