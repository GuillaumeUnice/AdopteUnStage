<?php
namespace App\Repositories;

interface PromotionRepository {

    /**
     * Retourne toutes les promotions
     * @return mixed
     */
    public function all();


    /**
     * Retourne les promotions rattachées à un utilisateur
     *
     * Attention : il faut que l'utilisateur ait, au préalable, une relation
     * de définie avec le modèle des promotions.
     *
     * @return mixed
     */
    public function getUserLoggedPromotion();


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
    public function updateUserLoggedPromotion($promotions);


    /**
     * Retourne collection des promotions
     * Chaque promotion possède une collection de ses specialitees
     */
    public function promotionWithSpecialite();


    /**
     * Retourne tableau des promotions
     * Chaque promotion possède un tableau de ses specialitees
     */
    public function promotionWithSpecialiteArray();

}