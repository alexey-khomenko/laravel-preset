<?php

namespace App\View\Components\Layouts\Partials;

use Illuminate\View\Component;
use Jenssegers\Agent\Agent;

class Languages extends Component
{
    public $languages;
    public $current;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->languages = \LaravelLocalization::getSupportedLocales();
        $this->current = \LaravelLocalization::getCurrentLocale();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return count($this->languages) > 0 ? view('layouts.partials.languages') : '';
    }
}