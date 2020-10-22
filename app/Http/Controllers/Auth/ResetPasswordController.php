<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class ResetPasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showResetForm()
    {

    }

    public function reset()
    {

    }
}
