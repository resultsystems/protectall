<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Authy\AuthyApi;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TwoAuthenticateController extends Controller
{
    public function index()
    {
        return view('auth.twoauthenticate');
    }

    public function store(Request $request)
    {
        $authy = new AuthyApi(env('AUTHY_KEY', null), env('AUTHY_URL'));

        $login = $request->user();
        try {
            $user = $authy->registerUser($login->email, $login->phone, $login->country_code);
        } catch (\Exception $e) {
            return redirect('/two_authenticate');
        }

        if (!$user->ok()) {
            return redirect('/two_authenticate');
        }

        try {
            if ($authy->verifyToken($user->id(), $request->token)) {
                $login->two_authenticate_until = Carbon::now()->addDays(5);
                $login->save();
            }

            return redirect('/');
        } catch (\Exception $e) {
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
        Auth::user()->update([
            'two_authenticate'       => false,
            'two_authenticate_until' => null, ]);

        return redirect('/');
    }
}
