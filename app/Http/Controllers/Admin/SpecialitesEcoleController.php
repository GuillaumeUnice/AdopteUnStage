<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Promotion;
use App\Specialite;
use App\Http\Requests\Admin\SpecialiteEcoleRequest;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class SpecialitesEcoleController extends Controller {

    protected $specialite = null;
    protected $promotion = null;


    public function __construct(Specialite $specialite, Promotion $promotion)
    {
        $this->specialite = $specialite;
        $this->promotion = $promotion;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function read()
    {
        $specialites = $this->specialite->all();
        $promotions = $this->promotion->lists('nom', 'id');

        return view('admin.specialite', compact('specialites', 'promotions'));
    }

    public function create(SpecialiteEcoleRequest $request){

        $specialites = Input::get('specialite');
        $promotions = Input::get('promotion');

        if($specialites != []){
            foreach($specialites as $n => $specialite){
                $this->specialite->firstOrCreate(['nom' => $specialite])->promotion()->attach($promotions[$n]);
            }
        }

        return redirect(route('admin_specialite_read'));
    }

    public function update($id){

        $nom = Input::get('specialite');
        $specialite = $this->specialite->find($id);

        if($specialite != null){
            $old_name = $specialite->nom;
            $specialite->update(['nom' => $nom]);
            Session::flash('flash_success', 'La spécialité "'.$old_name.'" a bien été modifiée');
        }
        else{
            Session::flash('flash_error', 'Une erreur s\'est produite, aucune spécialité ne correspond dans nos données.');
        }

        return redirect(route('admin_specialite_read'));

    }

    public function delete($id){

        $specialite = $this->specialite->find($id);

        if($specialite != null){
            $name = $specialite->nom;
            $this->specialite->destroy($id);
            Session::flash('flash_success', 'La spécialité "'.$name.'" a été supprimée.');
        }
        else{
            Session::flash('flash_error', 'Une erreur s\'est produite, aucune spécialité ne correspond dans nos données.');
        }

        return redirect(route('admin_specialite_read'));

    }

    public function deletePromotion($spe_id, $promo_id){

        $specialite = $this->specialite->find($spe_id);
        $promotion = $this->promotion->find($promo_id);

        if($specialite != null && $promotion != null){
            $name_spe = $specialite->nom;
            $name_promo = $promotion->nom;
            $specialite->promotion()->detach($promo_id);
            Session::flash('flash_success', 'La spécialité "'.$name_spe.'" n\'est plus associée à la promotion "'.$name_promo.'"');
        }
        else{
            Session::flash('flash_error', 'Une erreur s\'est produite, aucune spécialité ne correspond dans nos données.');
        }

        return redirect(route('admin_specialite_read'));
    }

}
