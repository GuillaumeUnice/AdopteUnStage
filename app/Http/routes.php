<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',
    [
        'as' => 'index',
        'uses' => 'Auth\AuthController@getLogin'
    ]
);

Route::get('/logout',
    [
        'as' => 'logout',
        'uses' => 'Auth\AuthController@getLogout'
    ]
);

Route::get('etudiant/inscription/{token}',
    [
        'as' => 'inscription_etudiant',
        'uses' => 'Auth\AuthController@getEtudiantInscription'
    ]
);

Route::post('etudiant/inscription/{token}', 'Auth\AuthController@postEtudiantInscription');

Route::get('entreprise/inscription',
    [
        'as' => 'register_entreprise',
        'uses' => 'Auth\AuthController@getEntrepriseInscription'
    ]
);

Route::post('entreprise/inscription', 'Auth\AuthController@postEntrepriseInscription');

Route::get('etudiant/inscription',
    [
        'as' => 'register_etudiant',
        'uses' => 'Auth\AuthController@getEtudiantInscription'
    ]
);

Route::get('moderateur/inscription/{token}',
    [
        'as' => 'inscription_moderateur',
        'uses' => 'Auth\AuthController@getModerateurInscription'
    ]
);

Route::post('moderateur/inscription/{token}', 'Auth\AuthController@postModerateurInscription');

Route::get('/accueil',
    [
        'as' => 'accueil',
        'uses' => 'Auth\AuthController@getAccueil'
    ]
);


/*
 |---------------------------------------------------------------------------------------------------------------------|
 |---------------------------------------------------------------------------------------------------------------------|
 |                                                      MODERATEUR                                                     |
 |---------------------------------------------------------------------------------------------------------------------|
 |---------------------------------------------------------------------------------------------------------------------|
 */


Route::group(['prefix' => 'moderateur', 'middleware' => 'auth.moderateur'], function () {

    Route::get('invitation-etudiant',
        [
            'as' => 'invitation_etudiant',
            'uses' => 'Auth\InvitationController@getInvitationEtudiant'
        ]
    );

    Route::post('invitation-etudiant', 'Auth\InvitationController@postInvitationEtudiant');

    Route::post('invitation-etudiant-multiple',
        [
            'as' => 'invitation-etudiant-multiple',
            'uses' => 'Auth\InvitationController@postInvitationEtudiantMultiple'
        ]
    );

    Route::get('validation-entreprise',
        [
            'as' => 'validation_entreprise',
            'uses' => 'Moderateur\EntrepriseValidationController@getEntrepriseValidation'
        ]
    );

    Route::post('validation-entreprise', 'Moderateur\EntrepriseValidationController@postEntrepriseValidation');

    //Methode get relative à la validation des offres de stage
    Route::get('validation-offrestage',
        [
            'as' => 'validation_offrestage',
            'uses' => 'Moderateur\ModerateurValidationOffreStageController@getOffreStage'
        ]
    );

    //Methode post relative à la validation des offres de stage
    Route::post('validation-offrestage/{id}',
        [
            'as'   => 'validation-offrestage',
            'uses' => 'Moderateur\ModerateurValidationOffreStageController@postOffreStage'
        ]
    )->where('id', '[0-9]+');


    Route::resource('offre-stage', 'Moderateur\ModerateurOffreStageController');

    Route::get('offre-stage', [
        'as' => 'offre-stage-moderateur',
        'uses' => 'Moderateur\ModerateurOffreStageController@index'
    ]);

    Route::get('/',
        [
            'as' => 'accueil-moderateur',
            'uses' => 'Moderateur\ModerateurStatistiquesPromotionController@getStatistiques'
        ]
    );

    Route::get('promotions',
        [
            'as' => 'moderateur-promotions',
            'uses' => 'Moderateur\ModerateurPromotionsController@getPromotions'
        ]
    );

    Route::post('promotions',
        [
            'as' => 'moderateur-promotions',
            'uses' => 'Moderateur\ModerateurPromotionsController@postPromotions'
        ]
    );

});


/*
 |---------------------------------------------------------------------------------------------------------------------|
 |---------------------------------------------------------------------------------------------------------------------|
 |                                                       ETUDIANT                                                      |
 |---------------------------------------------------------------------------------------------------------------------|
 |---------------------------------------------------------------------------------------------------------------------|
 */


Route::group(['prefix' => 'etudiant', 'middleware' => 'auth.etudiant'], function () {

    Route::get('views/{name}', function($name) {

        if (View::exists($name)) {
            return View::make($name);
        }
        return "Error 404";
    });

    Route::get('recherche-stage',
        [
            'as' => 'recherche-stage-etudiant',
            'uses' => 'Etudiant\EtudiantRechercheStageController@getAllStage'
        ]
    );


    Route::get('/',
        [
            'as' => 'racine-etudiant',
            'uses' => function () {
                return View::make('etudiant.layout');
            }
        ]
    );


    //page acceuil de l'etudiant: afficher la liste des responsables de sa promotion
    Route::get('/accueil',
        [
            'as' => 'accueil-etudiant',
            'uses' => 'Etudiant\EtudiantAccueilController@showAccueil'
        ]
    );

    Route::get('profil',
        [
            'as' => 'profil-etudiant',
            'uses' => 'Etudiant\EtudiantProfilController@getEtudiantProfil'
        ]
    );

    Route::post('profil',
        [
            'as' => 'profil-etudiant',
            'uses' => 'Etudiant\EtudiantProfilController@postEtudiantProfil'
        ]
    );

    Route::get('competence',
        [
            'as' => 'competence-etudiant',
            'uses' => 'Etudiant\EtudiantCompetenceController@getCompetence'
        ]
    );

    Route::post('competence',
        [
            'as' => 'competence-etudiant',
            'uses' => 'Etudiant\EtudiantCompetenceController@postCompetence'
        ]
    );

    Route::get('cv',
        [
            'as' => 'cv-etudiant',
            'uses' => 'Etudiant\EtudiantCVController@getEtudiantCV'
        ]
    );

    Route::post('cv',
        [
            'as' => 'cv-etudiant',
            'uses' => 'Etudiant\EtudiantCVController@postEtudiantCV'
        ]
    );

    //voir le historique des stages d'un etudiant
    Route::get('historique-feedback',
        [
            'as' => 'historique-feedback',
            'uses' => 'Etudiant\EtudiantFeedBackController@getHistoriqueStage'
        ]
    );
    //voir le historique des stages d'un etudiant
    Route::get('historique-feedback/{id_offre}/pourvoir',
        [
            'as' => 'pouvoir-offre',
            'uses' => 'Etudiant\EtudiantFeedBackController@pourvoirOffreStage'
        ]
    );
    //voir les details du stage et son feedback correspondant
    Route::get('historique-feedback/{id_stage}',
        [
            'as' => 'historique-feedback-detail',
            'uses' => 'Etudiant\EtudiantFeedBackController@getFeedbackStage'
        ]
    )->where('n', '[0-9]+');
    //modifier un stage d'un stage
    Route::post('historique-feedback/{id_stage}',
        [
            'as' => 'historique-feedback-update',
            'uses' => 'Etudiant\EtudiantFeedBackController@updateFeedback'
        ]
    )->where('n', '[0-9]+');

    //entrer la vue de creation du feedback
    Route::get('historique-feedback/{id_stage}/create',
        [
            'as' => 'historique-feedback-ajouter',
            'uses' => 'Etudiant\EtudiantFeedBackController@create'
        ]
    );

    //creer un feedback d'un stage
    Route::post('historique-feedback/{id_stage}/create',
        [
            'as' => 'historique-feedback-envoyer',
            'uses' => 'Etudiant\EtudiantFeedBackController@postFeedbackStage'
        ]
    );
    //supprimer un feedback d'un stage
    Route::delete('historique-feedback/{id_feedback}/delete',
        [
            'as' => 'historique-feedback-supprimer',
            'uses' => 'Etudiant\EtudiantFeedBackController@delete'
        ]
    );

    Route::resource('offre-stage', 'Etudiant\EtudiantOffreStageController');

    Route::get('offre-stage',
        [
            'as'   => 'offre-stage-etudiant',
            'uses' => 'Etudiant\EtudiantOffreStageController@create'
        ]
    );

    Route::get('postuler',
        [
            'as'   => 'postuler',
            'uses' => 'Etudiant\EtudiantRecherchePostulerController@getListOffreStages'
        ]
    );

    Route::get('postuler/{id_offre}',
        [
            'as'   => 'postuler',
            'uses' => 'Etudiant\EtudiantRecherchePostulerController@postuler'
        ]
    );

    Route::post('postuler/{id_offre}',
        [
            'as'   => 'postuler',
            'uses' => 'Etudiant\EtudiantRecherchePostulerController@envoyerPostulerEmail'
        ]
    );

    Route::post('accueil/recherche',
        [
            'as'   => 'accueil-recherche',
            'uses' => 'Etudiant\EtudiantAccueilController@setRecherche'
        ]
    );


});


/*
 |---------------------------------------------------------------------------------------------------------------------|
 |---------------------------------------------------------------------------------------------------------------------|
 |                                                      ENTREPRISE                                                     |
 |---------------------------------------------------------------------------------------------------------------------|
 |---------------------------------------------------------------------------------------------------------------------|
 */


Route::group(['prefix' => 'entreprise', 'middleware' => 'auth.entreprise'], function () {

    Route::get('views/{name}', function($name) {
        if (View::exists($name)) {

            return View::make($name);
        }
        return "Error 404";
    });

    Route::get('recherche-etudiant',
        [
            'as' => 'recherche-etudiant',
            'uses' => 'Entreprise\EntrepriseRechercheEtudiantController@getAllEtudiant'
        ]
    );

    Route::get('/',
        [
            'as' => 'racine-entreprise',
            'uses' => function () {
                return View::make('entreprise.layout');
            }
        ]
    );
//    Route::get('/',
//        [
//            'as' => 'accueil-entreprise',
//            'uses' =>'Entreprise\EntrepriseAccueilController@getPourcentageProfil'
//        ]
//    );

    Route::get('accueil',
        [
            'as' => 'accueil-entreprise',
            'uses' =>'Entreprise\EntrepriseAccueilController@getPourcentageProfil'
        ]
    );

    Route::get('profil',
        [
            'as' => 'profil-entreprise',
            'uses' => 'Entreprise\EntrepriseProfilController@getEntrepriseProfil'
        ]
    );

    Route::post('profil',
        [
            'as' => 'profil-entreprise',
            'uses' => 'Entreprise\EntrepriseProfilController@postEntrepriseProfil'
        ]
    );

    Route::resource('offre-stage', 'Entreprise\EntrepriseOffreStageController');


    Route::get('offre-stage',
        [
            'as'  => 'offre-stage-entreprise',
            'uses'=>'Entreprise\EntrepriseOffreStageController@index'
        ]
    );

    Route::resource('etudiant', 'Entreprise\EntrepriseProfilEtudiantController');


});


/*
 |---------------------------------------------------------------------------------------------------------------------|
 |---------------------------------------------------------------------------------------------------------------------|
 |                                                    ADMINISTRATEUR                                                   |
 |---------------------------------------------------------------------------------------------------------------------|
 |---------------------------------------------------------------------------------------------------------------------|
 */


Route::group(['prefix' => 'administrateur', 'middleware' => 'auth.administrateur'], function () {

    Route::get('accueil',
        [
            'as' => 'accueil-administrateur',
            'uses' => function () {
                return redirect(route('admin_identite_ecole_get'));
            }
        ]
    );

    Route::get('invitation-moderateur',
        [
            'as' => 'invitation_moderateur',
            'uses' => 'Auth\InvitationController@getInvitationModerateur'
        ]
    );

    Route::post('invitation-moderateur', 'Auth\InvitationController@postInvitationModerateur');

    Route::post('invitation-moderateur-multiple',
        [
            'as' => 'invitation-moderateur-multiple',
            'uses' => 'Auth\InvitationController@postInvitationModerateurMultiple'
        ]
    );

    Route::get('identite-ecole',
        [
            'as' => 'admin_identite_ecole_get',
            'uses' => 'Admin\IdentiteEcoleController@getIdentite'
        ]
    );

    Route::post('identite-ecole/logo',
        [
            'as' => 'admin_identite_ecole_logo_post',
            'uses' => 'Admin\IdentiteEcoleController@postLogo'
        ]
    );

    Route::delete('identite-ecole/logo/delete',
        [
            'as' => 'admin_identite_ecole_logo_delete',
            'uses' => 'Admin\IdentiteEcoleController@deleteLogo'
        ]
    );

    Route::post('identite-ecole/nom',
        [
            'as' => 'admin_identite_ecole_nom_post',
            'uses' => 'Admin\IdentiteEcoleController@postNom'
        ]
    );

    Route::delete('identite-ecole/nom/delete',
        [
            'as' => 'admin_identite_ecole_nom_delete',
            'uses' => 'Admin\IdentiteEcoleController@deleteNom'
        ]
    );

    Route::get('promotion',
        [
            'as' => 'admin_promotion_get',
            'uses' => 'Admin\PromotionEcoleController@read'
        ]
    );

    Route::post('promotion',
        [
            'as' => 'admin_promotion_post',
            'uses' => 'Admin\PromotionEcoleController@create'
        ]
    );

    Route::get('promotion/delete/{id}',
        [
            'as' => 'admin_promotion_delete',
            'uses' => 'Admin\PromotionEcoleController@delete'
        ]
    )->where('id', '[0-9]+');

    Route::post('promotion/update/{id}',
        [
            'as' => 'admin_promotion_update',
            'uses' => 'Admin\PromotionEcoleController@update'
        ]
    )->where('id', '[0-9]+');


    Route::get('specialite',
        [
            'as' => 'admin_specialite_read',
            'uses' => 'Admin\SpecialitesEcoleController@read'
        ]
    );

    Route::post('specialite',
        [
            'as' => 'admin_specialite_create',
            'uses' => 'Admin\SpecialitesEcoleController@create'
        ]
    );

    Route::put('specialite/{id}',
        [
            'as' => 'admin_specialite_update',
            'uses' => 'Admin\SpecialitesEcoleController@update'
        ]
    )->where('id', '[0-9]+');

    Route::delete('specialite/{id}',
        [
            'as' => 'admin_specialite_delete',
            'uses' => 'Admin\SpecialitesEcoleController@delete'
        ]
    )->where('id', '[0-9]+');

    Route::delete('specialite/{spe_id}/{promo_id}',
        [
            'as' => 'admin_specialite_promotion_delete',
            'uses' => 'Admin\SpecialitesEcoleController@deletePromotion'
        ]
    )->where('spe_id', '[0-9]+')->where('promo_id', '[0-9]+');

});

Route::controllers(
    [
        'auth' => 'Auth\AuthController',
        'password' => 'Auth\PasswordController',
    ]
);