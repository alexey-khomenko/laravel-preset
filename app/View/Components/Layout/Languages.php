<?php

namespace App\View\Components\Layout;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Languages extends Component
{
    public $languages;
    public $current;

    /**
     * @return void
     */
    public function __construct()
    {
        $this->languages = \LaravelLocalization::getSupportedLocales();
        $this->current = \LaravelLocalization::getCurrentLocale();
    }

    /**
     * @return View|string
     */
    public function render()
    {
        return count($this->languages) > 0 ? view('layout.languages') : '';
    }
}