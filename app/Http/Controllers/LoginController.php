<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);

        if (!$token = auth()->attempt($request->only($this->username(), 'password'))) {
            return redirect('/')->with([
                "message" => "Invalid Credentials",
                "success" => false
            ]);
        }

        return view('dashboard', auth()->user());
    }

    public function username()
    {
        return filter_var(request()->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
    }

    public function redirectToLogin()
    {
        return view('login')->with([
            "message" => ""
        ]);
    }
}
