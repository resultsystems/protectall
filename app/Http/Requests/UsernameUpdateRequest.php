<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Username;
use Auth;

class UsernameUpdateRequest extends UsernameStoreRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $id = $this->route('id');

        return Username::where('id', $id)
            ->where('user_id', Auth::user()->id)
            ->exists();
    }
}
