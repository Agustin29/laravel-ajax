<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    // METODO DE LOGIN
    public function index()
    {
        return view('login');
    }
}
