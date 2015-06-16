<?php namespace App\Http\Requests\Etudiant;

use App\Http\Requests\Request;

class ProfilEtudiantRequest extends Request {

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
            'website' => '|max:255',
            'social' => 'max:255',
            'promotion' => 'numeric|exists:promotions,id',
            'specialite' => 'numeric|exists:specialites,id',
        ];
    }

}