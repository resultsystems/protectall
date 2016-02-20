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
            'number' => 'required|regex:/^[0-9]{12,19}[0-9]$/',
            'valid' => ['regex:/^(0[1-9]|1[1-2])\/([0-9][0-9])$/'],
            'cvv' => 'integer|max:9999',
            'password' => 'integer|max:99999999',
            'secret' => 'required|min:3|confirmed',
            'secret_confirmation' => 'required|min:3',
        ];
    }
}
