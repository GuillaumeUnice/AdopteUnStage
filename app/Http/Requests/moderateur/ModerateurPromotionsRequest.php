<?php
/**
 * Created by PhpStorm.
 * User: camille
 * Date: 08/06/15
 * Time: 22:40
 */

namespace App\Http\Requests\Moderateur;


use Illuminate\Http\Request;

class ModerateurPromotionsRequest extends Request{

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
            'promotions' => 'alpha|exists:promotions,nom'
        ];
    }

}