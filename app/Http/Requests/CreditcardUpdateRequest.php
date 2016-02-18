<?php

namespace App\Http\Requests;

use App\Creditcard;
use App\Http\Requests\Request;
use Auth;

class CreditcardUpdateRequest extends CreditcardStoreRequest
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
}
