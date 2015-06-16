<?php namespace App\Http\Controllers\Etudiant;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\OffreStage;
use App\Entreprise;
use App\Feedback;
use App\User;
use App\Etudiant;

class EtudiantRecherchePostulerController extends Controller {

    public function getListOffreStages(){
        $offres=OffreStage::all();
        return View::make('etudiant.recherche_postuler')->with('offres',$offres);
    }

    public function postuler($id_offre){
        $offre = OffreStage::find($id_offre);
        $entreprise = Entreprise::find($offre->entreprise_id);

        $infos = OffreStage::leftJoin('feedbacks', 'feedbacks.id', '=', 'offre_stages.feedback_id')
            ->leftJoin('users', 'users.user_id', '=', 'offre_stages.stagiaire_id')
            ->where('entreprise_id', $offre->entreprise_id)
            ->where('users.user_type', 'App\Etudiant')
            ->select('feedbacks.titre', 'feedbacks.contenu', 'feedbacks.recrutement_feedback', 'feedbacks.isOuvert', 'users.name', 'users.email')->get();

        return View::make('etudiant.postuler')
            ->with('offre', $offre)
            ->with('infos', $infos)
            ->with('entreprise', $entreprise);
    }

    public function envoyerPostulerEmail($id_offre){
        $etudiant_id=Auth::user()->user->id;
        $candidatures_id=DB::table('etudiant_offre_stage')->where('offre_stage_id',$id_offre)->lists('etudiant_id');

        //si l'etudiant a déjà postulé sur cette offre de stage
        if(in_array($etudiant_id,$candidatures_id))
            return Redirect::refresh()->with('flash_error', 'Vous avez postulé sur cette offre de stage!!');
        //ajouter le candidature dans la table etudiant_offre_stage
        DB::table('etudiant_offre_stage')
            ->insert(
                array('etudiant_id' => $etudiant_id, 'offre_stage_id' => $id_offre
                )
            );

    	$etudiant_id=Auth::user()->user->id;
    	$user_etudiant=User::where('user_type','App\Etudiant')->where('user_id',$etudiant_id)->first();
    	$etudiant_name=$user_etudiant->name;
    	$etudiant_email=$user_etudiant->email;

    	$offre=OffreStage::find($id_offre);
    	$user_entreprise=User::where('user_type','App\Entreprise')->where('user_id',$offre->entreprise_id)->first();
    	$entreprise_name=$user_entreprise->name;
    	$contact_email=$offre->email;

    	$data = array('nom' => $etudiant_name);

   		$cv = Input::file('cv');
        $path_cv = $cv->getRealPath();

        $lm = Input::file('lm');
        $path_lm = $lm->getRealPath();

    	Mail::send('etudiant.postuler_envoyer', $data, function ($message) use ($entreprise_name,$contact_email, $path_cv,$path_lm,$etudiant_email, $etudiant_name) {
        $message->from($etudiant_email)
            ->to($contact_email,$entreprise_name)
            ->subject('[Candidature de stage]'.$etudiant_name)
            ->attach($path_cv, 
            	[
            		'as' => 'cv_'.$etudiant_name.'.pdf',
            		'mime' => 'application/pdf'
            	])
            ->attach($path_lm, 
            	[
            		'as' => 'lm_'.$etudiant_name.'.pdf',
            		'mime' => 'application/pdf'
            	]);
        });

        return Redirect::back()->with('flash_success', 'Votre email de candidature à été envoyé !');
    }

}
