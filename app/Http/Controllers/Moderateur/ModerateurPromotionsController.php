<?php namespace App\Http\Controllers\Moderateur;


use App\Http\Controllers\Controller;
use App\Http\Requests\Moderateur\ModerateurPromotionsRequest;
use App\Promotion;
use App\Repositories\PromotionRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class ModerateurPromotionsController extends Controller {


    //Repository du modèle des promotions
    protected $promotionRepository;

    public function __construct(PromotionRepository $promotionRepository)
    {
        $this->promotionRepository = $promotionRepository;
    }


    /**
     * Méthode appellée par une méthode GET, elle retourne une vue.
     *
     * @return \Illuminate\View\View
     */
    public function getPromotions()
    {
        $promotions = $this->promotionRepository->all();
        $moderateur_promotions = $this->promotionRepository->getUserLoggedPromotion()->lists('promotion_id');

        return view('moderateur.promotions', compact('promotions', 'moderateur_promotions'));
    }


    /**
     * Méthode appellée par une méthode POST, elle enregistre le lien entre
     * une promotion et un modérateur du système.
     *
     * @param ModerateurPromotionsRequest $request
     * @return mixed
     */
    public function postPromotions(ModerateurPromotionsRequest $request)
    {
        $this->promotionRepository->updateUserLoggedPromotion(Input::get('promotions'));

        return Redirect::refresh()
            ->with('flash_success', 'Les promotions auxquelles vous êtes rattaché ont été enregistrées.')
            ->withInput();
    }


}