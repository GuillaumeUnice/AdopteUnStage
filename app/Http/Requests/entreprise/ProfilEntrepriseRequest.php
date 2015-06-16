<?php namespace App\Http\Requests\Entreprise;

use App\Http\Requests\Request;

class ProfilEntrepriseRequest extends Request {

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
            '_id' => 'required|numeric|exists:entreprises,id',
            'nom' => 'required|max:255',
            'description' => 'max:255',
            'siret' => 'min:14|numeric',
            'taille' => 'numeric',
            'lieu' => 'max:60',
            'fax' => 'max:60',
            'telephone' => 'max:60',
            'site' => 'max:60',
            'sociaux' => 'max:60',
            'telephone' => 'max:60',
            'secteur' => 'max:255',
            'logo' => 'image',
        ];
    }

}