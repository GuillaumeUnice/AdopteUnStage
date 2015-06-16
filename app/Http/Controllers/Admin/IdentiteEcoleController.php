<?php

namespace App\Http\Controllers\Admin;


use App\Ecole;
use App\Variable;
use Illuminate\Routing\Controller;
use App\Http\Requests\Admin\LogoEcoleRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class IdentiteEcoleController extends Controller{

    protected $filename = null;
    protected $schoolname = null;

    public function __construct()
    {
        $file = Variable::where('key', '=', 'ECOLE_LOGO');
        $name = Variable::where('key', '=', 'ECOLE_NOM');

        if($file->count()>0) {
            $this->filename = $file->first()->value;
        }

        if($name->count()>0) {
            $this->schoolname = $name->first()->value;
        }
    }

    public function getIdentite(){
        $logo = $this->filename;
        $nom = $this->schoolname;
        return view('admin.identite_ecole_test', compact('logo','nom'));
    }

    public function postLogo(LogoEcoleRequest $request){

        if($request->hasFile('logo')){
            $file = $request->file('logo');

            if($file->isValid()) {

                $ext = $file->getClientOriginalExtension();
                $logo = 'logo.'.$ext;

                $file->move('uploads/ecole', $logo);
                $this->save_logo($ext);
                Session::flash('flash_success', 'Votre logo à bien été téléchargé');

            }
            else {
                Session::flash('flash_error', 'Votre fichier n\'est pas valide');
            }
        }
        else{
            Session::flash('flash_error', 'Aucun fichier n\'a été transmis');
        }

        return redirect(route('admin_identite_ecole_get', ['nom' => $this->schoolname, 'logo' => $logo]));
    }

    public function deleteLogo(){

        $name = $this->filename;


        if($name != null){
            $this->filename = null;
            Variable::where('key', '=', 'ECOLE_LOGO')->delete();
            File::delete('uploads/ecole/'.$name);

            Session::flash('flash_success', 'Le logo "'.$name.'" a été supprimé.');
        }
       else{
            Session::flash('flash_error', 'Une erreur s\'est produite, aucun logo ne correspond dans nos données.');
        }

        return redirect(route('admin_identite_ecole_get', ['nom' => $this->schoolname, 'logo' => null]));
    }


    public function postNom(){

        if(Request::has('nom')){
            $nom = Request::input('nom');

            if(strlen($nom) > 0) {
                $this->save_nom($nom);
                Session::flash('flash_success', 'Le nom de votre école est à présent "'.$nom.'"');

            }
            else {
                Session::flash('flash_error', 'Votre nom d\'école n\'est pas valide');
            }
        }
        else{
            Session::flash('flash_error', 'Le nom de l\'école n\'a pas été envoyé');
        }

        return redirect(route('admin_identite_ecole_get', ['nom' => $nom, 'logo' => $this->filename]));
    }

    public function deleteNom(){

        $name = $this->schoolname;


        if($name != null){
            $this->schoolname = null;
            Variable::where('key', '=', 'ECOLE_NOM')->delete();
            Session::flash('flash_success', 'Le nom "'.$name.'" a été supprimé.');
        }
        else{
            Session::flash('flash_error', 'Une erreur s\'est produite, aucun nom ne correspond dans nos données.');
        }

        return redirect(route('admin_identite_ecole_get', ['nom' => null, 'logo' => $this->filename]));
    }


    private function save_logo($ext){

        $variable = new Variable();

        $variable->updateOrCreate(
            ['key' => 'ECOLE_LOGO'],
            ['key' => 'ECOLE_LOGO', 'value' => 'logo.'.$ext]
        );
    }

    private function save_nom($nom){

        $variable = new Variable();

        $variable->updateOrCreate(
            ['key' => 'ECOLE_NOM'],
            ['key' => 'ECOLE_NOM', 'value' => $nom]
        );
    }

}