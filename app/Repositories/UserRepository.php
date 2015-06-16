<?php namespace App\Repositories;


interface UserRepository {

    /**
     * Retourne nombre d'entreprise en attente de validation
     * @return mixed
     */
    public function getCountEntrepriseAttenteValidation();

}
