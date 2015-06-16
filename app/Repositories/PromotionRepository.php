<?php
namespace App\Repositories;

interface PromotionRepository {

    public function all();

    /**
     * Retourne tableau des promotions
     * Chaque promotion possède un tableau de ses specialitees
     */
    public function promotionWithSpecialite();

}