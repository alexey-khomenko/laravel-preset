<picture class="image-picture{{ $class }}" @if($style) style="{{ $style }}" @endif>
    <source srcset="{{ emptySrc() }}" type="image/webp" data-srcset="{{ $srcset }}"/>
    <img src="{{ emptySrc() }}" class="image-img lazyload" alt="{{ $alt }}" data-src="{{ $src }}"/>
</picture>