<?php namespace App\Http\Controllers\Etudiant;

use App\Http\Controllers\Controller;
use App\Repositories\OffreStageRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

use App\Feedback;
use App\OffreStage;
use App\Http\Requests\etudiant\FeedBackEtudiantRequest;

class EtudiantFeedBackController extends Controller {

    protected $offreStageRepository;

    /**
     * constructeur
     * @param OffreStageRepository $offreStageRepository
     */
    public function __construct(OffreStageRepository $offreStageRepository)
    {
        $this->offreStageRepository = $offreStageRepository;
    }

    /**
     * renvoyer la historique de l'etudiant: stages potulés et stages faits
     * @return mixed
     */
    public function getHistoriqueStage(OffreStageRepository $offreStageRepository){
        //chercher toutes les offres de stages que l'etudiant a postulé
        $candidatures= $offreStageRepository->getStagePostules(Auth::user()->user->id);
        //chercher toutes les offres de stages que l'étudiant a déjà fait
        $stages = $offreStageRepository->getStagesFaits(Auth::user()->user->id);

        $offres_id=array();
        foreach($stages as $stage)
            array_push($offres_id,$stage->id);
        //historiques inclut les candidatures et les stages déjà faits
        foreach($candidatures as $candidature){
            //éviter le doublement
            if(!in_array($candidature->offre_stage_id,$offres_id))
                array_push($stages,$candidature);
        }

        $valide_info = $this->offreStageRepository->all()->lists('valide', 'id');

        return View::make('etudiant.historique_stage')
            ->with('stages',$stages)
            ->with('valide_info', $valide_info);
    }

    /**
     * renvoyer le feedback de l'offre de stage
     * @param $id_stage
     * @return mixed
     */
    public function getFeedbackStage($id_stage){
        $stage=OffreStage::find($id_stage);
        $feedback_id=$stage->feedback_id;
        $feedback=Feedback::find($feedback_id);
        return View::make('etudiant.stage_feedback')->with('feedback',$feedback)->with('stage',$stage);
    }

    /**
     * changer le page vers créer un feedback
     * @param $id_stage
     * @return mixed
     */
    public function create($id_stage){
        $stage=OffreStage::find($id_stage);
        return View::make('etudiant.create_feedback')->with('stage',$stage);
    }

    /**
     * créer un feedback de l'offre de stage
     * @param FeedBackEtudiantRequest $request
     * @param $id_stage
     * @return mixed
     */
    public function postFeedbackStage(FeedBackEtudiantRequest $request,$id_stage)
    {

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


    /**
     * Changer le detail du feedback
     * @param FeedBackEtudiantRequest $request
     * @param $id
     * @return mixed
     */
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

    /**
     * Supprimer le feedback de l'offre de stage
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        $feedback = Feedback::find($id);
        $feedback->delete();

        return Redirect::to('etudiant/historique-feedback');
    }

    /**
     * fait pourvoir une offre de stage par l'etudiant
     * @param $id_offre
     * @return mixed
     */
    public function pourvoirOffreStage($id_offre){
        $offre=OffreStage::find($id_offre);
        $offre->stagiaire_id=Auth::user()->user->id;
        $offre->save();

        return Redirect::back()->with('flash_success', 'pourvoir de loffre de stage enregistré!');
    }

}
