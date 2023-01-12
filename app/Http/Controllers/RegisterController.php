<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed'],
            'contact_no' => ['required'],
            'user_role' => ['required'],
            'username' => ['required', 'unique:users,username']
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'username' => $request->username,
            'user_role' => $request->user_role,
            'contact_no' => $request->contact_no
        ]);
        return view('login', ['message' => "Successfully logged in"]);
    }

    public function redirectToRegister()
    {
        return view('register');
    }
}
