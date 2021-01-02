<?php

namespace App\Http\Livewire\Layout;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Languages extends Component
{
    public $languages;
    public $current;

    /**
     * @return void
     */
    public function mount()
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