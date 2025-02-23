<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {

        $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email'  ],
            'password' =>[ 'required|min:8', Password::min(6)->mixedCase()->letters()->numbers()->symbols()],
        ]);

        $request->session()->regenerate();

        return redirect('/');
    }
}
