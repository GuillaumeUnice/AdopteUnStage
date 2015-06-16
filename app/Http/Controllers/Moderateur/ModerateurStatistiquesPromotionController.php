<?php namespace App\Http\Controllers\Moderateur;

namespace App\Http\Controllers\Moderateur;

use App\Http\Controllers\Controller;
use App\Repositories\EtudiantRepository;
use App\Repositories\OffreStageRepository;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Repositories\PromotionRepository;
use App\Repositories\UserRepository;

/**
 * Class ModerateurStatistiqueController
 * Classe chargée de l'affichage des statistiques d'une promotion par les moderateurs responsable de cette promo
 * @package App\Http\Controllers\Moderateur
 */
class ModerateurStatistiquesPromotionController extends Controller
{

    /**
     * Repository instance.
     *
     */
    protected $promotionRepository;
	
    /**
     * Constructeur par defaut
     */
    public function __construct(PromotionRepository $promotionRepository)
    {
        $this->promotionRepository = $promotionRepository;
    }


    /**
     * Récupère l'ensemble des statistiques des promo dont le moderateur est responsable
     *
     * @return la vue
     */
    public function getStatistiques( OffreStageRepository $offreStageRepository,
                                     EtudiantRepository $etudiantRepository,
                                        UserRepository $userRepository)
    {
        // recuperation des promotions du moderateur dans un tableau objet promotion
        $array['promotion'] = Auth::user()->user->promotions()->get();
        //Enregistrement des id des promotions dans un tableau
        $id_promotion = array();
        foreach ($array['promotion'] as $value){
            array_push($id_promotion, $value->id);
        }
        // recuperation statistique par promotion des offres de stages
        $array['offre_stage'] = $offreStageRepository->getStatistiqueOffreStageParPromotion($id_promotion);
        // recuperation statistique par promotion des offres de etudiants
        $array['etudiant'] = $etudiantRepository->getStatistiqueEtudiantParPromotion($id_promotion);

        // nombre entreprise en attente de validation
        $array['validation_entreprise'] = $userRepository->getCountEntrepriseAttenteValidation();
        // nombre offre de stage concerant la promotion du moderateur en attente de validation
        $array['validation_offre_stage'] = $offreStageRepository->getCountOffreStageValiderParPromotionModerateur();

        return View::make('moderateur/statistiques')->with($array);
    }

}