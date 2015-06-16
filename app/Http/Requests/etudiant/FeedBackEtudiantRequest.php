<?php namespace App\Http\Requests\Etudiant;

use App\Http\Requests\Request;

class FeedBackEtudiantRequest extends Request {

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
            'titre' => 'max:255',
            'contenu' => 'max:2000',
            'recrutement_feedback' => 'max:2000',
        ];
    }

}