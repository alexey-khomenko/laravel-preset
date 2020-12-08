<?php

namespace Modules\User\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

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

    /**
     * @param Request $request
     * @param Auth $auth
     * @return RedirectResponse
     */
    public function check(Request $request, Auth $auth): RedirectResponse
    {
        // todo email -> login
        $credentials = $request->only('email', 'password');

        if ($auth->attempt($credentials, true)) return redirect()->intended('dashboard');
    }

    /**
     * @param Request $request
     * @param Auth $auth
     * @return RedirectResponse
     */
    public function logout(Request $request, Auth $auth): RedirectResponse
    {
        $auth->logout();
        $request->session()->invalidate();

        return redirect()->route('home');
    }
}
