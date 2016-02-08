<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Creditcard extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'text',
        'obs',
    ];
}
