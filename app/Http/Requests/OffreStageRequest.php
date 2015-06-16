<?php namespace App\Http\Requests;

use Illuminate\Support\Facades\Validator;

class OffreStageRequest extends Request {


    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'=>'required|max:200',
            'duree' => 'max:20',
            'promotion' => 'required|exists:promotions,id',
            'specialite' => 'exists:specialites,id',
            'description' => 'max:5000',
            'nom_contact' => 'max:60',
            'email' => 'max:60',
            'tel' => 'max:15',
            'horaire' => 'max:20',
            'gratification' => 'max:20',
            'adresse_stage' => 'max:200',
        ];

    }

}