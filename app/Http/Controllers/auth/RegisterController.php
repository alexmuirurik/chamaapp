<?php

namespace App\Http\Controllers\Auth;

// use App\Http\Requests\RegisterRequest;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        request()->validate([
            'names' => 'required|max:255|min:2',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:5|max:255',
            'terms' => 'required'
        ]);
    
        $names = Str::of(request()->names)->explode(' ');
        $user = User::create([
            'username'  => Str::of(request()->names)->slug(),
            'firstname' => Arr::first($names),
            'lastname'  => Arr::last($names),
            'names'     => request()->names,
            'email'     => request()->email,
            'password'  => request()->password,
            'terms'     => request()->terms
        ]);

        auth()->login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
