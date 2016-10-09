<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'username',
        'phone', 'country_code',
        'two_authenticate',
        'two_authenticate_until',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = [
        'two_authenticate_until',
    ];
    protected $casts = [
        'two_authenticate',
    ];

    public function hasTwoAuthenticate()
    {
        if (!env('AUTHY_ACTIVED', false)) {
            return true;
        }
        if (!$this->two_authenticate) {
            return true;
        }

        if (!$this->two_authenticate_until) {
            return false;
        }
        $now = Carbon::now();

        return $now->lte($this->two_authenticate_until);
    }
}
