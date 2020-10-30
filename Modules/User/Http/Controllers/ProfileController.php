<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
//use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        return view('user::profile');
    }

    public function check(Request $request)
    {

    }
}
