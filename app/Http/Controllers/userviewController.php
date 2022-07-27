<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class userviewController extends Controller
{
    public function index()
    {
        $user = user::get();
        return view('dashboard/admin/usercontrol', compact('user'));
    }
}
