<?php namespace App\Http\Requests\Moderateur;
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 08/06/2015
 * Time: 14:44
 */

use App\Http\Requests\Request;


class ValidationOffreStageRequest extends Request{

    /**
     *
     */

    public function authorize(){
        return true;
    }

    public function rules(){
        return[
            '_id' => 'required|numeric|exists:offre_stages,id,valide,0'
        ];
    }

}