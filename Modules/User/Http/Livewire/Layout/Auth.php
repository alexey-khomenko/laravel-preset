<?php

namespace Modules\User\Http\Livewire\Layout;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Auth extends Component
{
    public const GUEST = ['login', 'register', 'reset'];
    public const AUTH = ['profile', 'logout'];

    public $pages;
    public $current;
    public $routes;

    /**
     * @return void
     */
    public function mount()
    {
        // todo есть роут / нет роута
        $this->pages = true;

        // todo current
        $this->current = '...';

        // todo auth / guest
        $this->routes = false ? self::AUTH : self::GUEST;
    }

    /**
     * @return View|string
     */
    public function render()
    {
        return view('user::layout.auth');
    }
}