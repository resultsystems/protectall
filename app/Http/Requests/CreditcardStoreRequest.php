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
            'number' => 'required',
            'cvv' => 'string|min:3|max:4',
            'password' => 'required',
        ];
    }
}
