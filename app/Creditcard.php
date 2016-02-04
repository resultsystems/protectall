<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Creditcard extends Model
{
    protected $fillable = [
        'title', 'text', 'data_crypt', 'obs',
    ];
}
