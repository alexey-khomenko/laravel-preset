<?php

namespace Modules\User\Http\Controllers;

use Modules\User\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        // todo в middleware предыдущая страница == logout ? redirect route('home')
        $this->middleware('auth');
    }

    public function index()
    {
        return view('user::pages.profile');
    }

    public function check(Request $request)
    {
        //
    }
}
