<?php
/**
 * Created by PhpStorm.
 * User: camille
 * Date: 05/06/15
 * Time: 14:44
 */

namespace App\Http\Requests\Admin;


use Illuminate\Http\Request;

class SpecialiteEcoleRequest extends Request {

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
            'specialite' => 'required|min:2',
            'promotion' => 'required|exists:promotions',
        ];
    }

}
