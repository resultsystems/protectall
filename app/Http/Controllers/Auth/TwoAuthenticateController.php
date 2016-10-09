<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
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
        Session::put('auth.two.authenticate', false);

        if (true) {
            return redirect('/');
        }

        return redirect('/two_authenticate');
    }

    public function activate()
    {
        Auth::user()->update(['two_authenticate' => true]);

        return redirect('/two_authenticate');
    }

    public function deactivate()
    {
        Auth::user()->update(['two_authenticate' => false]);

        return redirect('/');
    }
}
