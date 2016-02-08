<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Text;
use Auth;

class TextUpdateRequest extends TextStoreRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $id = $this->route('id');

        return Text::where('id', $id)
            ->where('user_id', Auth::user()->id)
            ->exists();
    }
}
