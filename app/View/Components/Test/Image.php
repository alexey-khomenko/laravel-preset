<?php

namespace App\View\Components\Test;

use Illuminate\View\Component;

class Image extends Component
{
    public $alt;
    public $src;
    public $srcset;
    public $ratio;

    /**
     * Create a new component instance.
     *
     * @param String $alt
     * @param String $src
     * @param String $srcset
     * @param Int $width
     * @param Int $height
     * @return void
     */
    public function __construct(String $alt, String $src, String $srcset, Int $width, Int $height)
    {
        $this->alt = $alt;
        $this->src = mixAsset($src);
        $this->srcset = mixAsset($srcset);

        $ratio = round(($height / $width) * 100, 2);
        $this->ratio = $ratio > 0 ? $ratio : 0;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.test.image');
    }
}