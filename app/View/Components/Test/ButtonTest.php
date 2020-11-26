<?php

namespace App\View\Components\Test;

use Illuminate\View\Component;

class ButtonTest extends Component
{
    public $route;

    /**
     * Create a new component instance.
     *
     * @param String $route
     * @return void
     */
    public function __construct(String $route)
    {
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.test.button-test');
    }
}
