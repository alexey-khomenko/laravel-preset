<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {

    }

    public function login()
    {

    }

    public function logout(Request $request)
    {
        Auth::guard()->logout();
        $request->session()->invalidate();

        return redirect()->route('home');
    }
}
