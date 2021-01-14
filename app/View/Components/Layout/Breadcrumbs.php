<?php

namespace App\View\Components\Layout;

use Diglactic\Breadcrumbs\Exceptions\InvalidBreadcrumbException;
use Diglactic\Breadcrumbs\Exceptions\UnnamedRouteException;
use Diglactic\Breadcrumbs\Exceptions\ViewNotSetException;
use Diglactic\Breadcrumbs\Breadcrumbs as Show;
use Illuminate\View\Component;

class Breadcrumbs extends Component
{
    public $route;

    /**
     * @param string $route
     * @return void
     */
    public function __construct(string $route)
    {
        $this->route = $route;
    }

    /**
     * @return string
     * @throws InvalidBreadcrumbException
     * @throws UnnamedRouteException
     * @throws ViewNotSetException
     */
    public function render(): string
    {
        return (string)Show::render($this->route);
    }
}