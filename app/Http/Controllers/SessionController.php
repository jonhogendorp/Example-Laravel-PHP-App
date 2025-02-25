<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(){
      //validate
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
      //ate,pt login
        if(!Auth::attempt($attributes)){
      throw ValidationException::withMessages(['email' => 'Your provided credentials could not be verified.']);
        }

      // regenerate the session
      request()->session()->regenerate();
        //redirect

        return redirect('/jobs');
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
