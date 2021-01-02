<?php

namespace App\Http\Livewire\Layout;

use Illuminate\Contracts\View\View;
use Livewire\Component;

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