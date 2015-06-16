<?php namespace App\Repositories\Impl;

use App\Repositories\PromotionRepository;
use App\Promotion;

class PromotionRepositoryImpl implements PromotionRepository {


    public function all()
    {
        return Promotion::all();
    }

    /**
     * Retourne tableau des promotions
     * Chaque promotion possède un tableau de ses specialitees
     */
    public function promotionWithSpecialite() {
        return Promotion::with('specialites')->get();
    }

}