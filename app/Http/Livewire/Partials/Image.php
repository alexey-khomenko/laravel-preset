<?php

namespace App\Http\Livewire\Partials;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Image extends Component
{
    public $alt;
    public $source;
    public $srcset;
    public $ratio;
    public $empty_src;

    /**
     * @param string $alt
     * @param string $src
     * @param string $srcset
     * @param int $width
     * @param int $height
     * @return void
     */
    public function mount(string $alt, string $src, string $srcset, int $width, int $height)
    {
        $this->alt = $alt;
        $this->source = mixAsset($src);
        $this->srcset = mixAsset($srcset);

        $ratio = round(($height / $width) * 100, 2);
        $this->ratio = $ratio > 0 ? $ratio : 0;

        // https://laravel.com/docs/8.x/views#sharing-data-with-all-views
        $this->empty_src = 'data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('partials.image');
    }
}