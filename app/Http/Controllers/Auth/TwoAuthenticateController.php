<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Authy\AuthyApi;
use Illuminate\Http\Request;
use Session;

class TwoAuthenticateController extends Controller
{
    public function index()
    {
        return view("auth.twoauthenticate");
    }

    public function store(Request $request)
    {
        $authy = new AuthyApi(env('AUTHY_KEY', null), env('AUTHY_URL'));

        $login = $request->user();
        $user  = $authy->registerUser($login->email, $login->phone, $login->country_code);
        if (!$user->ok()) {
            return redirect('/');
        }

        if ($authy->verifyToken($user->id(), $request->token)) {
            Session::put('auth.two.authenticate', true);
        }

        return redirect('/');
    }

    public function activate()
    {
        Auth::user()->update(['two_authenticate' => true]);

        return redirect('/two_authenticate');
    }

    public function deactivate()
    {
        Session::put('auth.two.authenticate', false);
        Auth::user()->update(['two_authenticate' => false]);

        return redirect('/');
    }
}
