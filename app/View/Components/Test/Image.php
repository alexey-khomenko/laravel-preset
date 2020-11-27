<?php

namespace App\View\Components\Test;

use Illuminate\View\Component;

class Image extends Component
{
    const CLASSES = [
        'l--image-square',
        'l--image-hd',
    ];

    public $alt;
    public $src;
    public $srcset;
    public $class;
    public $style;

    /**
     * Create a new component instance.
     *
     * @param String $alt
     * @param String $src
     * @param String $srcset
     * @param String $class
     * @param Float $ratio
     * @return void
     */
    public function __construct(String $alt, String $src, String $srcset, String $class = '', Float $ratio = 0.0)
    {
        $this->alt = $alt;
        $this->src = mixAsset($src);
        $this->srcset = mixAsset($srcset);

        $this->class = $ratio === 0.0 && in_array($class, self::CLASSES) ? ' ' . $class : '';
        $this->style = $ratio > 0 ? 'padding-bottom: ' . $ratio . '%;' : '';
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