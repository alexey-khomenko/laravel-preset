<?php

namespace Modules\User\Http\Controllers;

use Modules\User\Entities\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view('user::login', ['test' => $this->getTest()]);
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

    private function getTest()
    {
        return User::isTest() ? '+' : '-';
    }
}