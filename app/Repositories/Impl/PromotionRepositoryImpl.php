<?php namespace App\Repositories\Impl;

use App\Repositories\PromotionRepository;
use App\Promotion;
use Illuminate\Support\Facades\Auth;

class PromotionRepositoryImpl implements PromotionRepository {


    /**
     * Retourne toutes les promotions
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function all()
    {
        return Promotion::all();
    }


    /**
     * Retourne les promotions rattachées à un utilisateur
     * Attention : il faut que l'utilisateur ait, au préalable, une relation
     * de définie avec le modèle des promotions.
     *
     * @return mixed
     */
    public function getUserLoggedPromotion()
    {
        return Auth::user()->user->promotions();
    }


    /**
     * La méthode effectue la mise à jour en BDD des promotions
     * rattachées à un utilisateur (create and update)
     *
     * Attention : il faut que l'utilisateur ait, au préalable, une relation
     * de définie avec le modèle des promotions.
     *
     * @param $promotions
     * @return mixed
     */
    public function updateUserLoggedPromotion($promotions)
    {
        return Auth::user()->user->promotions()->sync(($promotions==null)?[]:$promotions);
    }


    /**
     * Retourne collection des promotions
     * Chaque promotion possède une collection de ses specialitees
     */
    public function promotionWithSpecialite() {
        return Promotion::with('specialites')->get();
    }


    /**
     * Retourne tableau des promotions
     * Chaque promotion possède un tableau de ses specialitees
     */
    public function promotionWithSpecialiteArray() {
        $promotions = Promotion::with('specialites')->get();

        $result = [];
        foreach($promotions as $promotion){
            array_push($result, $promotion->specialites->lists('nom','id'));
        }

        return $result;

    }
}