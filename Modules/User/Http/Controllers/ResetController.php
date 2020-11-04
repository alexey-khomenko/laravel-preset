<?php

namespace Modules\User\Http\Controllers;

use Modules\User\Entities\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResetController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('user::reset');
    }

    public function check(Request $request)
    {

    }
}
