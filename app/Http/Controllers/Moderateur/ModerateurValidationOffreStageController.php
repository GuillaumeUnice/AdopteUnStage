<?php namespace App\Http\Controllers\Moderateur;
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 08/06/2015
 * Time: 13:21
 */

namespace App\Http\Controllers\Moderateur;


use App\Http\Controllers\Controller;
use App\Http\Requests\Moderateur\ValidationOffreStageRequest;
use App\OffreStage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

/**
 * Class ModerateurValidationOffreStageController
 * Classe chargée de la validation des offres de stage par les moderateurs
 * @package App\Http\Controllers\Moderateur
 */
class ModerateurValidationOffreStageController extends Controller
{

    /**
     * Constructeur par defaut
     */
    public function __construct()
    {

    }


    /**
     * Récupère les offres de stage disponibles non validées
     *
     * @return la vue
     */
    public function getOffreStage()
    {
        $toValidate = OffreStage::where('valide', 0)
            ->whereHas('promotion.moderateurs', function($q){
                $q->where('moderateurs.id', Auth::user()->user->id);
            })
            ->with('entreprise')
            ->get();

        return View::make('moderateur/validation_offrestage')->with('offres', $toValidate);
    }


    public function postOffreStage(ValidationOffreStageRequest $request)
    {

        $offre = OffreStage::find(Input::get('_id'));
        $offre->valide = 1;
        $offre->save();
        return Redirect::refresh()
            ->with('flash_success', 'L\'offre de stage a bien été validée');
    }

}