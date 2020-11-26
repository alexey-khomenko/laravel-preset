{{-- todo pb-full --}}

<picture class="image-picture pb-full">
    <source srcset="{{ emptySrc() }}" type="image/webp" data-srcset="{{ $srcset }}"/>
    <img src="{{ emptySrc() }}" class="image-img lazyload" alt="{{ $alt }}" data-src="{{ $src }}"/>
</picture>