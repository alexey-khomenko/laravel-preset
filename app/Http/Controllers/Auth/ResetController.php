<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class ResetController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('home');
    }

    public function reset()
    {

    }
}
