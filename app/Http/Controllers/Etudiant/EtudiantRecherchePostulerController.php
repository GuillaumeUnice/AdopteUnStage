<?php namespace App\Http\Controllers\Etudiant;

use App\Http\Controllers\Controller;
use App\Repositories\OffreStageRepository;
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

    /**
     * postuler une offre de stage
     * @param $id_offre
     * @return mixed
     */
    public function postuler($id_offre, OffreStageRepository $offreStageRepository){
        $offre = OffreStage::find($id_offre);
        $entreprise = Entreprise::find($offre->entreprise_id);

        $infos = $offreStageRepository->getInfosStage($offre->entreprise_id);

        return View::make('etudiant.postuler')
            ->with('offre', $offre)
            ->with('infos', $infos)
            ->with('entreprise', $entreprise);
    }

    /**
     * envoyer l'email avec cv ou le lm à l'adress du contact
     *
     * @param $id_offre
     * @return mixed
     */
    public function envoyerPostulerEmail($id_offre){
        $cv = Input::file('cv');
        $lm = Input::file('lm');
        if($cv==null && $lm==null)
            return Redirect::back()->with('flash_error', 'Vous devez importer au moins un document!!');

        $etudiant_id=Auth::user()->user->id;
        $candidatures_id=DB::table('etudiant_offre_stage')->where('offre_stage_id',$id_offre)->lists('etudiant_id');
        //si l'etudiant a déjà postulé sur cette offre de stage
        if(in_array($etudiant_id,$candidatures_id))
            return Redirect::refresh()->with('flash_error', 'Vous avez déjà postulé sur cette offre de stage!!');
        $this->ajouterEtudiantCommeCandidature($id_offre);

    	$etudiant=User::where('user_type','App\Etudiant')->where('user_id',$etudiant_id)->first();
    	$etudiant_name=$etudiant->name;
    	$etudiant_email=$etudiant->email;
    	$offre=OffreStage::find($id_offre);
    	$user_entreprise=User::where('user_type','App\Entreprise')->where('user_id',$offre->entreprise_id)->first();
    	$entreprise_name=$user_entreprise->name;
    	$contact_email=$offre->email;
        $this->envoyerMail($etudiant_name,$etudiant_email,$entreprise_name,$contact_email,$cv,$lm);

        return Redirect::back()->with('flash_success', 'Votre email de candidature à été envoyé !');
    }

    /**
     * Mail
     *
     * @param $etudiant_name
     * @param $etudiant_email
     * @param $entreprise_name
     * @param $contact_email
     * @param $cv
     * @param $lm
     */
    private function envoyerMail($etudiant_name,$etudiant_email,$entreprise_name,$contact_email,$cv,$lm){
        Mail::send('etudiant.postuler_envoyer', array('nom' => $etudiant_name), function ($message)
        use ($entreprise_name,$contact_email, $cv,$lm,$etudiant_email, $etudiant_name)
        {
            if($cv) {
                $message->attach($cv->getRealPath(),
                    [
                        'as' => 'cv_' . $etudiant_name . '.pdf',
                        'mime' => 'application/pdf'
                    ]);
            }
            if($lm){
                $message->attach($lm->getRealPath(),
                    [
                        'as' => 'lm_'.$etudiant_name.'.pdf',
                        'mime' => 'application/pdf'
                    ]);
            }

            $message->from($etudiant_email,$etudiant_name)
                ->to($contact_email)
                ->subject('[Candidature de stage]'.$etudiant_name);
        });

    }

    /**
     * ajouter l'etudiant dans les candidatures de l'offre de stage
     * @param $id_offre
     */
    private function ajouterEtudiantCommeCandidature($id_offre){
        $etudiant_id=Auth::user()->user->id;
        //ajouter le candidature dans la table etudiant_offre_stage
        DB::table('etudiant_offre_stage')
            ->insert(
                array('etudiant_id' => $etudiant_id, 'offre_stage_id' => $id_offre
                )
            );
    }

}
