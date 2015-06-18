<?php namespace App\Http\Controllers\Etudiant;

use App\Etudiant;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\etudiant\EtudiantCVRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class EtudiantCVController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | CV Etudiant Controller
    |--------------------------------------------------------------------------
    |
    | Ce controller permet la gestion de son CV (upload, edition)
    |
    */

    public function __construct()
    {

    }

    /**
     * obtenir le cv de l'etudiant
     *
     * @return \Illuminate\View\View
     */
    public function getEtudiantCV(){
        $cv = Auth::user()->user->cv;
        return view('etudiant.cv', compact('cv'));
    }

    /**
     * update un cv de l'etudiant
     *
     * @param EtudiantCVRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postEtudiantCV(EtudiantCVRequest $request){

        $etudiant = Etudiant::find(Auth::user()->user->id);

        DB::transaction(function() use ($request, $etudiant) {
            $file = $request->file('cv');
            if ($file != null) {
                if($file->getClientOriginalExtension() == 'pdf' || $file->getClientOriginalExtension() == 'PDF'){
                    $pdf = 'cv.pdf';
                    $cv = 'uploads/etudiants/'.md5(Auth::user()->name);
                    $file->move($cv, $pdf);
                    $etudiant->cv = $cv.'/'.$pdf;
                }
            }
        });

        $etudiant->save();

        return redirect(route('cv-etudiant', compact('cv')));

    }

}
