<?php namespace App\Http\Controllers\Moderateur;


use App\Http\Controllers\Controller;
use App\Http\Requests\Moderateur\ValidationOffreStageRequest;
use App\OffreStage;
use App\Repositories\OffreStageRepository;
use App\Repositories\PromotionRepository;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;

/**
 * Class ModerateurValidationOffreStageController
 * Classe chargée de la validation des offres de stage par les moderateurs
 *
 * @package App\Http\Controllers\Moderateur
 */
class ModerateurValidationOffreStageController extends Controller
{

    protected $offreStageRepository;
    protected $promotionsRepository;

    public function __construct(OffreStageRepository $offreStageRepository, PromotionRepository $promotionRepository)
    {
        $this->offreStageRepository = $offreStageRepository;
        $this->promotionsRepository = $promotionRepository;
    }

    /**
     * Récupère les offres de stage disponibles non validées
     *
     * @return la vue
     */
    public function getOffreStage()
    {
        $toValidate = $this->offreStageRepository->getOffreStageModerateurAvecEntreprises();
        $specialites = $this->promotionsRepository->promotionWithSpecialiteArray();

        return View::make('moderateur/validation_offrestage')
            ->with('offres', $toValidate)
            ->with('specialites', $specialites);
    }

    /**
     * Validation de l'offre de stage
     *
     * @param ValidationOffreStageRequest $request
     * @return mixed
     */
    public function postOffreStage($id,OffreStageRepository $offreStageRepository)
    {

        if($offreStageRepository->updateSpecialitesPromotionOffre($id,Input::get('specialites'))){

            $offre = OffreStage::find($id);
            $offre->valide = 1;
            $offre->save();

            return Redirect::back()
                ->with('flash_success', 'L\'offre de stage a bien été validée');
        }
        else
            return Redirect::back()
                ->with('flash_danger', 'L\'offre de stage n\'a pas pu être validée');



    }

}