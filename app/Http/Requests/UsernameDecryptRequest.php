<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Username;
use Auth;

class UsernameDecryptRequest extends Request
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
