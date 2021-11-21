<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function welcome(Request $request)
    {
        $first = $request['first'];
        $last = $request['last'];
        return view('welcome', compact('first', 'last'));
    }
}
