<?php

namespace App\Http\Requests;

use App\Creditcard;
use App\Http\Requests\Request;
use Auth;

class CreditcardDecryptRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $id = $this->route('id');

        return Creditcard::where('id', $id)
            ->where('user_id', Auth::user()->id)
            ->exists();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'secret' => 'required|min:3',
        ];
    }
}
