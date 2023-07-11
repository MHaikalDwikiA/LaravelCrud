<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create()
    {
        return view ('auth.login');
    }

    public function store(Request $request)
    {
        $attributes = $request -> validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

    if (Auth::attempt($attributes)) {
        return redirect(RouteServiceProvider::HOME)->with('success', 'You are now logged in');
    }

    throw ValidationException::withMessages([
        'email' => 'Your provied credentials does not match our records',
    ]);
    }
}
