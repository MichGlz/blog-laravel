<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{

    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => ['required', 'email', Rule::exists('users', 'email')],
            'password' => ['required' ]
        ]);

        if(! auth()->attempt($attributes)){

            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified'
            ]);

        }

        $firstName = ucfirst(explode(" ", auth()->user()->name)[0]);

        session()->regenerate();

        return redirect('/')->with('success', "Welcome back {$firstName}!");
               
    }

    public function destroy()
    {

        $firstName = ucfirst(explode(" ",auth()->user()->name)[0]);
        
        auth()->logout();

        return redirect('/')->with('success', "Goodbye {$firstName}!");
    }
}
