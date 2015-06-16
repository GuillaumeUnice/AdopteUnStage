<?php namespace App\Http\Controllers\Etudiant;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

use App\Feedback;
use App\OffreStage;
use App\Http\Requests\etudiant\FeedBackEtudiantRequest;

class EtudiantFeedBackController extends Controller {

    public function getHistoriqueStage(){

        $etudiant = Auth::user()->user;
        //chercher toutes les offres de stages que l'etudiant a postulé
        $candidatures=DB::table('etudiant_offre_stage')->where('etudiant_id',$etudiant->id)
                    ->join('offre_stages','etudiant_offre_stage.offre_stage_id','=','offre_stages.id')
                    ->selectRaw('etudiant_offre_stage.etudiant_id,etudiant_offre_stage.offre_stage_id,offre_stages.entreprise_id,
                        offre_stages.title,offre_stages.nom_contact,offre_stages.email,offre_stages.tel')
                    ->join('entreprises','entreprise_id','=','entreprises.id')
                    ->selectRaw(' offre_stage_id As id,entreprise_id,
                        title,nom_contact,email,tel,entreprises.nom As entreprise_nom,feedback_id,stagiaire_id')->get();
        //chercher toutes les offres de stages que l'étudiant a déjà fait
        $stages = DB::table('offre_stages')->where('stagiaire_id',$etudiant->id)
                    ->join('entreprises','entreprise_id','=','entreprises.id')
                    ->selectRaw('offre_stages.id As id,entreprise_id,title,nom_contact,email,tel,nom As entreprise_nom, feedback_id,stagiaire_id')
                    ->get();

        $offres_id=array();
        foreach($stages as $stage)
            array_push($offres_id,$stage->id);

        //historiques inclut les candidatures et les stages déjà faits
        foreach($candidatures as $candidature){
            //éviter le doublement
            if(!in_array($candidature->offre_stage_id,$offres_id))
                array_push($stages,$candidature);
        }
        return View::make('etudiant.historique_stage')->with('stages',$stages);
    }

    public function getFeedbackStage($id_stage){
        $stage=OffreStage::find($id_stage);
        $feedback_id=$stage->feedback_id;
        $feedback=Feedback::find($feedback_id);
        return View::make('etudiant.stage_feedback')->with('feedback',$feedback)->with('stage',$stage);
    }

    public function create($id_stage){
        $stage=OffreStage::find($id_stage);
        return View::make('etudiant.create_feedback')->with('stage',$stage);
    }

    public function postFeedbackStage(FeedBackEtudiantRequest $request,$id_stage)
    {
        $etudiant = Auth::user()->user;

        $feedback = new Feedback;
        $feedback->titre=Input::get('titre');
        $feedback->contenu=Input::get('contenu');
        $feedback->recrutement_feedback=Input::get('recrutement_feedback');
        if(Input::get('ouvertcontact')=='on')
            $feedback->isOuvert=true;
        else
            $feedback->isOuvert=false;

        if ($feedback->save() ) {

            $stage=OffreStage::find($id_stage);
            $stage->feedback_id=$feedback->id;
            if($stage->save())
                return Redirect::to('etudiant/historique-feedback')->with('flash_success', 'Création du feedback enregistré!');
        } else {
            return Redirect::back()->withInput()->withErrors('Publier un feedback échoué!');
        }
    }



    public function updateFeedback(FeedBackEtudiantRequest $request, $id)
    {
        $feedback = Feedback::find($id);
        $feedback->titre=Input::get('titre');
        $feedback->contenu=Input::get('contenu');
        $feedback->recrutement_feedback=Input::get('recrutement_feedback');
        if(Input::get('ouvertcontact')=='on')
            $feedback->isOuvert=true;
        else
            $feedback->isOuvert=false;

        if ($feedback->save()) {
             return Redirect::to('etudiant/historique-feedback')->with('flash_success', 'Modification du feedback enregistré!');
        } else {
            return Redirect::back()->withInput($feedback)->withErrors('Update un feedback échoué!');
        }
    }
        
    public function delete($id)
    {
        $feedback = Feedback::find($id);
        $feedback->delete();

        return Redirect::to('etudiant/historique-feedback');
    }

    public function pourvoirOffreStage($id_offre){
        $offre=OffreStage::find($id_offre);
        $offre->stagiaire_id=Auth::user()->user->id;
        $offre->save();
        //dd($offre);

        return Redirect::refresh()->with('flash_success', 'pourvoir de loffre de stage enregistré!');
    }

}
