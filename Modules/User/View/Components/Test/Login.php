<?php

namespace Modules\User\View\Components\Test;

use Illuminate\View\Component;

class Login extends Component
{
    public $test;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->test = 'test';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('user::test.login');
    }
}