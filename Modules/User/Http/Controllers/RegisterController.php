<?php

namespace Modules\User\Http\Controllers;

use Modules\User\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('user::pages.register');
    }

    public function check(Request $request)
    {

    }
}
