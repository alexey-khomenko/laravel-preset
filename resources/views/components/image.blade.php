<picture
        @if ($ratio === 100.0)
        class="l--image-picture l--image-square"
        @elseif ($ratio === 56.25)
        class="l--image-picture l--image-hd"
        @elseif ($ratio > 0)
        class="l--image-picture" style="padding-bottom: {{ $ratio }}%;"
        @endif
>
    <source srcset="{{ $empty_src }}" type="image/webp" data-srcset="{{ $srcset }}"/>
    <img src="{{ $empty_src }}" class="l--image-img lazyload" alt="{{ $alt }}" data-src="{{ $source }}"/>
</picture>