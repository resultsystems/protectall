<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

abstract class Request extends FormRequest
{
    public function forbiddenResponse()
    {
        return response()->json(['message' => 'Sem permissão para esta operação ou registro não encontrado!'], 422);
    }

    // OPTIONAL OVERRIDE
    public function response(array $errors)
    {
        return response()->json($errors, 422);
    }

}
