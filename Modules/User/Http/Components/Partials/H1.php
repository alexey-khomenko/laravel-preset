<?php

namespace Modules\User\Http\Components\Partials;

use Illuminate\View\Component;

class H1 extends Component
{
    public $title;

    /**
     * @param string $title
     * @return void
     */
    public function __construct(string $title)
    {
        $this->title = $title;
    }

    /**
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('user::partials.h1');
    }
}