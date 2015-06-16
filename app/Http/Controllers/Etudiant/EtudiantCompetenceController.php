<?php namespace App\Http\Controllers\Etudiant;

use App\Competence;
use App\Http\Controllers\Controller;
use App\Repositories\CompetenceRepository;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class EtudiantCompetenceController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | Competence Etudiant Controller
    |--------------------------------------------------------------------------
    |
    | Ce controller permet la gestion des competence d'un etudiant
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
     * Affiche les competences en selectionnant celle de l'etudiant
     *
     * @return View
     */
    public function getCompetence(){
        $array['competences'] = Competence::all();

        $etudiant_competence = Auth::user()->user->competences()->get()->toArray();
        $array['etudiant_competence'] = array();
        foreach ($etudiant_competence as $value){
            array_push($array['etudiant_competence'],$value['nom']);
        }
        return View::make('etudiant.competence')->with($array);
    }

    /**
     * Traitement du formulaire de compétence
     *
     * @return Redirect
     */
    public function postCompetence(CompetenceRepository $repository){

        $repository->saveMultipe(Input::get('competence'), Auth::user()->user);
        return Redirect::refresh()->with('flash_success', 'Modification Compétence enregistré!')->withInput();

    }

}
