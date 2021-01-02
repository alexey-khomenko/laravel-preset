<?php

namespace App\Http\Livewire\Layout;

use Livewire\Component;

class Favicons extends Component
{
    /**
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('layout.favicons');
    }
}