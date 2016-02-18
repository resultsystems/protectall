<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class TextStoreRequest extends Request
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
            'title'  => 'required',
            'text'   => 'required',
            'note'   => 'required',
            'secret' => 'required|min:3',
        ];
    }
}
