<?php namespace App\Repositories;


interface UserRepository {

    /**
     * Retourne nombre d'entreprise en attente de validation
     * @return mixed
     */
    public function getCountEntrepriseAttenteValidation();

    /**
     * Retourne la liste des modérateurs de la promotion etudiant
     *
     * @param $id id de l'etudiant
     * @return mixed
     */
    public function getListModerateurs($id);

}
