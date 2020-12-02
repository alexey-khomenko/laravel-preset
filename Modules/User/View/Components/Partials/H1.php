<?php

namespace Modules\User\View\Components\Partials;

use Illuminate\View\Component;

class H1 extends Component
{
    public $title;

    /**
     * Create a new component instance.
     *
     * @param String $title
     * @return void
     */
    public function __construct(String $title)
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('user::partials.h1');
    }
}