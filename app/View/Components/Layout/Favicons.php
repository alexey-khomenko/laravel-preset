<?php

namespace App\View\Components\Layout;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Favicons extends Component
{
    /**
     * @return View|string
     */
    public function render()
    {
        return view('layout.favicons');
    }
}