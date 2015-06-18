<?php namespace App\Http\Controllers\Entreprise;

use App\Http\Controllers\ProfilEtudiantController;
use Illuminate\Support\Facades\View;

class EntrepriseProfilEtudiantController extends ProfilEtudiantController {



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $array = parent::show($id);
        return view('entreprise.profil_etudiant')->with($array);
    }

}
