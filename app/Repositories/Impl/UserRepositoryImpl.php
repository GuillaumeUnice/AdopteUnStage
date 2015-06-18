<?php namespace App\Repositories\Impl;


use App\User;
use App\Repositories\UserRepository;


class UserRepositoryImpl implements UserRepository {


    /**
     * Retourne nombre d'entreprise en attente de validation
     * @return mixed
     */
    public function getCountEntrepriseAttenteValidation()
    {
        return User::whereValide(0)
            ->join('entreprises', 'entreprises.id', '=', 'users.user_id')
            ->count();
    }

    /**
     * Retourne la liste des modérateurs de mes promotions
     *
     * @return mixed
     */
    public function getListModerateurs($id)
    {
        return User::where('user_type', 'App\Moderateur')->where('role_id', '2')
            ->join('moderateur_promotion', 'moderateur_id', '=', 'users.user_id')
            ->join('promotions', 'promotions.id', '=', 'moderateur_promotion.promotion_id')
            ->where('promotion_id', $id)
            ->selectRaw('users.name,users.email,moderateur_promotion.moderateur_id, moderateur_promotion.promotion_id,promotions.nom AS promotion_nom')
            ->get();
    }

}