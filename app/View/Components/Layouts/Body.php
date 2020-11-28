<?php

namespace App\View\Components\Layouts;

use Illuminate\View\Component;

class Body extends Component
{

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        // todo class l--webp-off
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.layouts.body');
    }
}