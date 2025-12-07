<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserRegistrationController extends Controller
{
    //
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        $attributes = request()->validate([
            'first-name' => ['required'],
            'last-name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(6), 'confirmed'], // validate password_confirmation
        ]);

        // $user = User::create($attributes);
        $user = User::create([
            'first_name' => $attributes['first-name'],
            'last_name' => $attributes['last-name'],
            'email' => $attributes['email'],
            'password' => $attributes['password'],
        ]);

        Auth::login($user);

        return redirect('/jobs');
    }
}
