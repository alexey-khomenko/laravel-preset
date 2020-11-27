<picture
        @if ($ratio === 100.0)
        class="image-picture l--image-square"
        @elseif ($ratio == 56.25)
        class="image-picture l--image-hd"
        @elseif ($ratio > 0)
        class="image-picture" style="padding-bottom: {{ $ratio }}%;"
        @endif
>
    <source srcset="{{ emptySrc() }}" type="image/webp" data-srcset="{{ $srcset }}"/>
    <img src="{{ emptySrc() }}" class="image-img lazyload" alt="{{ $alt }}" data-src="{{ $src }}"/>
</picture>