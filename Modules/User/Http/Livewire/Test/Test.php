<?php

namespace Modules\User\Http\Livewire\Test;

use Livewire\Component;

class Test extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('user::partials.test.test');
    }
}
