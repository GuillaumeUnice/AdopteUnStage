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

}