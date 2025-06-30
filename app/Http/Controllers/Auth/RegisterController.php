<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Inertia\Inertia;

class RegisterController extends Controller
{
    public function create()
    {
        return Inertia::render('Auth/Register');
    }

    public function store(Request $request)
    {
        sleep(2);

        $credentials = $request->validate([
            'name' => 'required',
            'email' => 'required|lowercase|email|max:255',
            'password' => 'required|confirmed|min:3'
        ]);

        $user = User::create($credentials);

        event(new Registered($user));

        // Auth::Login($user);

        FacadesAuth::Login($user);

        // Auth::

        return redirect()->route('home');
        // dd($request);
    }
}
