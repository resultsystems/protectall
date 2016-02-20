<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class UsernameStoreRequest extends Request
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
            'service' => 'required|max:255',
            'username' => 'required|max:255',
            'note' => 'max:1000',
            'password' => 'required|max:255',
            'secret' => 'required|min:3|confirmed',
            'secret_confirmation' => 'required|min:3',
        ];
    }
}
