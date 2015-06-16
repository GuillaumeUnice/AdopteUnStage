<?php namespace App\Http\Requests\Admin;

use App\Http\Requests\Request;

/**
 * Created by PhpStorm.
 * User: camille
 * Date: 02/06/15
 * Time: 13:45
 */

class LogoEcoleRequest extends Request {

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
            'logo' => 'required|image',
        ];
    }

}
