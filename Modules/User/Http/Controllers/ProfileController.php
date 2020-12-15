<?php

namespace Modules\User\Http\Controllers;

use Modules\User\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
