<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;
//use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view('user::login');
    }

    public function check(Request $request)
    {

    }

    public function logout(Request $request)
    {
        Auth::guard()->logout();
        $request->session()->invalidate();

        return redirect()->route('home');
    }
}
