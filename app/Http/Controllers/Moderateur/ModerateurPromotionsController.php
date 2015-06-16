<?php

namespace App\Http\Controllers\Moderateur;


use App\Http\Controllers\Controller;
use App\Http\Requests\Moderateur\ModerateurPromotionsRequest;
use App\Promotion;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class ModerateurPromotionsController extends Controller {

    /**
     * Instance du modèle Promotion
     *
     * @var Promotion|null
     */
    protected $promotion = null;

    /**
     * Constructeur du controller, il permet de réaliser l'injection
     * du modèle de Promotion.
     *
     * @param Promotion $promotion
     */
    public function __construct(Promotion $promotion)
    {
        $this->promotion = $promotion;
    }


    /**
     * Méthode appellée par une méthode GET, elle retourne une vue.
     *
     * @return \Illuminate\View\View
     */
    public function getPromotions()
    {
        $promotions = $this->promotion->all();
        $moderateur_promotions = Auth::user()->user->promotions()->lists('promotion_id');

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
        Auth::user()->user->promotions()->sync((Input::get('promotions')==null)?[]:Input::get('promotions'));

        return Redirect::refresh()
            ->with('flash_success', 'Les promotions auxquelles vous êtes rattaché ont été enregistrées.')
            ->withInput();
    }


}