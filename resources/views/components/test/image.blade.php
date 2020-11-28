<picture
        @if ($ratio === 100.0)
        class="l--image-picture l--image-square"
        @elseif ($ratio == 56.25)
        class="l--image-picture l--image-hd"
        @elseif ($ratio > 0)
        class="l--image-picture" style="padding-bottom: {{ $ratio }}%;"
        @endif
>
    <source srcset="{{ emptySrc() }}" type="image/webp" data-srcset="{{ $srcset }}"/>
    <img src="{{ emptySrc() }}" class="l--image-img lazyload" alt="{{ $alt }}" data-src="{{ $src }}"/>
</picture>