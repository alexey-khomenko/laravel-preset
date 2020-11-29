<?php

namespace App\View\Components\Layouts;

use Illuminate\View\Component;
use Jenssegers\Agent\Agent;

class Body extends Component
{
    public $apple;
    /**
     * Create a new component instance.
     *
     * @param Agent $agent
     * @return void
     */
    public function __construct(Agent $agent)
    {
        $this->apple = $agent->isDesktop();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('layouts.partials.body');
    }
}