<?php namespace App\Http\Controllers;

use App\Competence;
use App\Promotion;
use App\Repositories\CompetenceRepository;
use App\Specialite;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

use App\OffreStage;
use App\Http\Requests\OffreStageRequest;
use App\Entreprise;

class OffreStageController extends Controller {


    public function index()
    {
        $array['offres'] = OffreStage::where('user_id', Auth::user()->id)
            ->with('entreprise')
            ->orderBy('id', 'desc')->get();

        return $array;
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $array['entreprises'] = Entreprise::all();
        $array['promotions'] = Promotion::all();
        $array['competences'] = Competence::all();

        return $array;
	}

    /**
     * Afficher une offre de stage
     * @param $id
     */
    public function show($id)
    {
        $array['offre'] = OffreStage::where('offre_stages.id',$id)->with('entreprise')->first();

        if($array['offre']->promotion_id != null)
            $array['offre']['promotion'] = Promotion::find($array['offre']->promotion_id);

        if($array['offre']->specialite_id != null)
            $array['offre']['specialite'] = Specialite::find($array['offre']->specialite_id);

        $array['feedbacks'] = OffreStage::where('entreprise_id', $array['offre']->entreprise_id)
            ->leftJoin('feedbacks','feedbacks.id','=','offre_stages.feedback_id')
            ->leftJoin('users', 'users.user_id', '=', 'offre_stages.stagiaire_id')
            ->where('users.user_type', 'App\Etudiant')
            ->select('feedbacks.titre', 'feedbacks.contenu','feedbacks.recrutement_feedback', 'feedbacks.isOuvert','users.name', 'users.email')
            ->whereNotNull('feedbacks.contenu')
            ->get();
        //dd($array['feedbacks']);

        //les candidatures sur l'offre de stage
        $array['candidatures']=DB::table('etudiant_offre_stage')->where('offre_stage_id',$id)
            ->join('users','etudiant_offre_stage.etudiant_id','=','users.user_id')
            ->where('users.user_type','App\Etudiant')
            ->selectRaw('offre_stage_id,etudiant_id,name,email')
            ->join('etudiants','etudiant_id','=','etudiants.id')
            ->selectRaw('offre_stage_id,etudiant_id,name,email,promotion_id')
            ->join('promotions','promotion_id','=','promotions.id')
            ->selectRaw('offre_stage_id,etudiant_id,name,email,promotions.nom As promotion_nom')
            ->get();

        //dd($array['candidatures']);
        return $array;
    }

    protected function isIntPositif($input) {
        if ($input[0] == '-') {
            return false;
        }
        return ctype_digit($input);
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(OffreStageRequest $request, OffreStage $offre, CompetenceRepository $competence)
	{

        //Champs à vérifier pour mettre à NULL s'ils n'ont pas
        //été remplis.

        $date = Input::get('date_debut');
        $duree = Input::get('duree');

        $offre->date_debut = ($date != "")?date('Y-m-d', strtotime($date)):null;
		$offre->title = Input::get('title');
		$offre->duree = ($duree == 0)?null:$duree;
        $offre->promotion_id = Promotion::find(Input::get('promotion'))->id;
        $offre->specialite_id = Input::get('specialite');
        $offre->description = Input::get('description');
		$offre->nom_contact = Input::get('nom_contact');
		$offre->email = Input::get('email');
		$offre->tel=Input::get('tel');
		$offre->horaire = Input::get('horaire');
        $offre->adresse_stage=Input::get('adresse_stage');
		$offre->gratification = Input::get('gratification');
        $offre->user_id = Auth::user()->id;

        $result = $offre->save();
        $competence->saveMultipe(Input::get('competence'), $offre);

        return $result;

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$array['offre'] = OffreStage::where('offre_stages.id', $id)->with('competences')->first();

        if(isset($array['offre']->date_debut))
            $array['offre']->date_debut = date('Y-m', strtotime($array['offre']->date_debut));

        $array['competences']['mine'] = $array['offre']->competences->lists('id');

        $array['promotions'] = Promotion::all();
        $array['competences']['all'] = Competence::all();
        $array['entreprises'] = Entreprise::all();


        return $array;
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(OffreStageRequest $request,$id, CompetenceRepository $competence)
	{
		$offre = OffreStage::find($id);
		$offre->user_id = Auth::user()->id;
        $offre->title = Input::get('title');
        $offre->promotion_id = Promotion::find(Input::get('promotion'))->id;
        $offre->specialite_id = Input::get('specialite');
        //TODO parse date peut etre en faire un service?
        $date = Input::get('date_debut');
        $offre->date_debut = date('Y-m-d', strtotime($date));
		$offre->duree = Input::get('duree');
		$offre->description = Input::get('description');
		$offre->nom_contact = Input::get('nom_contact');
		$offre->email = Input::get('email');
		$offre->tel=Input::get('tel');
		$offre->horaire = Input::get('horaire');
        $offre->adresse_stage = Input::get('adresse_stage');
		$offre->gratification = Input::get('gratification');
		$offre->save();

        $competence->saveMultipe(Input::get('competence'), $offre);

        return $offre;
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$offre = OffreStage::find($id);
		return ($offre->delete());

	}
}