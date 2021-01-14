<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Test extends Component
{
    public $message;

    /**
     * @return View|string
     */
    public function render()
    {
        return view('livewire.test');
    }
}