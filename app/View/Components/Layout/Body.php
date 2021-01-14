<?php

namespace App\View\Components\Layout;

use Illuminate\Contracts\View\View;
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
     * @return View|string
     */
    public function render()
    {
        return view('layout.body');
    }
}