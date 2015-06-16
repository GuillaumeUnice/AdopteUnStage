<?php namespace App\Http\Requests\Entreprise;

use App\Http\Requests\Request;

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
            'title'=>'required|max:120',
            'entreprise_id' => 'required|exists:entreprises,id',
            'duree' => 'max:60',
            'description' => 'max:255',
            'nom_contact' => 'max:60',
            'email' => 'max:60',
            'tel' => 'max:60',
            'horaire' => 'max:60',
            'gratification' => 'max:60',
            'telephone' => 'max:60',
            'adresse_stage' => 'max:60',
        ];

    }

}