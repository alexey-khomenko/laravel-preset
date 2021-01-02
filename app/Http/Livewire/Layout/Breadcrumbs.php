<?php

namespace App\Http\Livewire\Layout;

use Livewire\Component;
use Diglactic\Breadcrumbs\Breadcrumbs as Show;

class Breadcrumbs extends Component
{
    public $route;

    /**
     * @param string $route
     * @return void
     */
    public function mount(string $route)
    {
        $this->route = $route;
    }

    /**
     * @return string
     * @throws \Diglactic\Breadcrumbs\Exceptions\InvalidBreadcrumbException
     * @throws \Diglactic\Breadcrumbs\Exceptions\UnnamedRouteException
     * @throws \Diglactic\Breadcrumbs\Exceptions\ViewNotSetException
     */
    public function render(): string
    {
        return (string)Show::render($this->route);
    }
}