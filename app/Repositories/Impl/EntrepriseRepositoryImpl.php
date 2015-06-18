<?php
/**
 * Created by PhpStorm.
 * User: camille
 * Date: 17/06/15
 * Time: 17:39
 */

namespace App\Repositories\Impl;


use App\Repositories\EntrepriseRepository;
use App\User;

class EntrepriseRepositoryImpl implements EntrepriseRepository{

    /**
     * Retourne la liste des entreprises en attente de validation
     *
     * @return mixed
     */
    public function getAttenteValidation()
    {
        return User::whereValide(0)
            ->join('entreprises', 'entreprises.id', '=', 'users.user_id')
            ->selectRaw( 'entreprises.nom, entreprises.lieu, entreprises.siret, entreprises.telephone, entreprises.description,
                    users.id, users.email, users.name')
            ->get();
    }
}