<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class CreditcardStoreRequest extends Request
{
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
            'number'              => 'required|regex:/^[0-9]{12,19}[0-9]$/',
            'valid'               => ['regex:/^(0[1-9]|1[0-2])\/(1[6-9]|2[0-9])$/'],
            'cvv'                 => 'regex:/[0-9]{3,4}/',
            'note'                => 'max:1000',
            'data_crypt'          => 'max:1000',
            'password'            => 'regex:/[0-9]{4,8}/',
            'secret'              => 'required|min:3|max:255|confirmed',
            'secret_confirmation' => 'required',
        ];
    }
}
