<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Username extends Model
{
    protected $fillable = [
        'user_id',
        'service',
        'username',
        'password',
        'note',
    ];
}
