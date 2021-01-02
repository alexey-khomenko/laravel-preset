<?php

namespace Modules\User\Http\Livewire\Partials;

use Livewire\Component;

class H1 extends Component
{
    public $title;

    /**
     * @param string $title
     * @return void
     */
    public function mount(string $title)
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