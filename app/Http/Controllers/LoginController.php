<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Validation\ValidationException;


class LoginController extends Controller
{

    public function create()
    {
        return view('landingpage.login');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($attributes)) {
            return redirect('dashboard')->with('success', $request->username);
        }

        throw ValidationException::withMessages([
            'password' => 'pastikan username dan password yang anda masukkan benar'
        ]);
    }
}
