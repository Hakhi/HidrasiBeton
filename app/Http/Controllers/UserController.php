<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $user = User::find(2);
        // return $user;
        // dd($user); 
        return view('dashboard.user.profiledashboard', compact('user'));
    }
}
