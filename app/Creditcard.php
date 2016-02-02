<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Creditcard extends Model
{
    public function getCvvDecryptAttribute($value)
    {
        return $value;
    }

    public function getPasswordDecryptAttribute($value)
    {
        return $value;
    }
}
