<?php namespace App\Http\Controllers\Admin;

use App\Promotion;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class PromotionEcoleController extends Controller {

    protected $promotion = null;

    public function __construct(Promotion $promotion)
    {
        $this->promotion = $promotion;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function read()
	{
        $promotions = $this->promotion->all();
		return view('admin.promotion_test', compact('promotions'));
	}

    public function create(Input $input){
        $promotions = $input->get('promotion');

        if($promotions != []) {
            foreach ($promotions as $n => $promotion) {
                $dpt = new Promotion();
                $dpt->firstOrCreate(['nom' => Str::upper($promotion)]);
            }
            Session::flash('flash_success', 'Vos promotions ont bien été créées');

        }
        else{
            Session::flash('flash_error', 'Aucun champs n\'a été envoyé');
        }

        $promotions = $this->promotion->all();
        return redirect(route('admin_promotion_get', compact('promotions')));
    }

    public function update($id){

        $nom = Input::get('nom');
        $promotion = $this->promotion->find($id);

        if($promotion != null){
            $old_name = $promotion->nom;
            $promotion->update(['nom' => $nom]);
            Session::flash('flash_success', 'La promotion "'.$old_name.'" a bien été renommée en "'.$nom.'"');
        }
        else{
            Session::flash('flash_error', 'Une erreur s\'est produite, aucune promotion ne correspond dans nos données.');
        }


        $promotions = $this->promotion->all();
        return redirect(route('admin_promotion_get', compact('promotions')));
    }

    public function delete($id){

        $promotion = $this->promotion->find($id);

        if($promotion != null){
            $name = $promotion->nom;
            $this->promotion->destroy($id);
            Session::flash('flash_success', 'La promotion "'.$name.'" a été supprimée.');
        }
        else{
            Session::flash('flash_error', 'Une erreur s\'est produite, aucune promotion ne correspond dans nos données.');
        }

        $promotions = $this->promotion->all();
        return redirect(route('admin_promotion_get', compact('promotions')));

    }

}
