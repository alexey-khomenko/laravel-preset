<?php

namespace App\Http\Livewire\Partials;

use Livewire\Component;

class ButtonTest extends Component
{
    public $route;

    /**
     * @param string $route
     * @return void
     */
    public function mount(string $route)
    {
        $this->route = $route;
    }

    /**
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('partials.button-test');
    }
}
