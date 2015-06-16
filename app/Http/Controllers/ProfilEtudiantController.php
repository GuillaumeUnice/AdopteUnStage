<?php namespace App\Http\Controllers;

use App\Competence;
use App\Etudiant;

class ProfilEtudiantController extends Controller {

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $array['etudiant'] = Etudiant::where('etudiants.id',$id)
            ->where('users.user_type', 'App\Etudiant')
            ->leftJoin('users','users.user_id','=','etudiants.id')
            ->leftJoin('profile_etudiants AS p','p.etudiant_id','=','etudiants.id')
            ->with('promotion','specialite')
            ->select('name', 'cv', 'website', 'social', 'email','professionnel','education', 'promotion_id', 'specialite_id')
            ->first();

        $array['competences'] = Etudiant::where('etudiants.id', $id)->with('competences')->first();

        return $array;
	}


}
