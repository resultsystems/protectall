<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Creditcard extends Model
{
    protected $fillable = [
        'user_id', 'number', 'text', 'data_crypt', 'obs', 'password', 'cvv',
    ];
}
