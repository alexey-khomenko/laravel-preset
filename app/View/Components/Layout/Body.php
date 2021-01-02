<?php

namespace App\View\Components\Layout;

use Illuminate\View\Component;
use Jenssegers\Agent\Agent;

class Body extends Component
{
    public $apple;

    /**
     * @param Agent $agent
     * @return void
     */
    public function __construct(Agent $agent)
    {
        $this->apple = $agent->isSafari();
    }

    /**
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('layout.body');
    }
}