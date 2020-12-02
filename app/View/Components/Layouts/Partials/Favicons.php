<?php

namespace App\View\Components\Layouts\Partials;

use Illuminate\View\Component;
use Jenssegers\Agent\Agent;

class Favicons extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('layouts.partials.favicons');
    }
}