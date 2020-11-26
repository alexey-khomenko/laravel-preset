<?php

namespace App\View\Components\Test;

use Illuminate\View\Component;

class Image extends Component
{
    public $alt;
    public $src;
    public $srcset;

    /**
     * Create a new component instance.
     *
     * @param String $alt
     * @param String $src
     * @param String $srcset
     * @return void
     */
    public function __construct(String $alt, String $src, String $srcset)
    {
        $this->alt = $alt;
        $this->src = mixAsset($src);
        $this->srcset = mixAsset($srcset);

        // todo className pb-full
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
