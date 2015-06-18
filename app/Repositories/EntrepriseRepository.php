<?php namespace App\Repositories;

interface EntrepriseRepository {

    /**
     * Retourne la liste des entreprises en attente de validation
     *
     * @return mixed
     */
    public function getAttenteValidation();

}