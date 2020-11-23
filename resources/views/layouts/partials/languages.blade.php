@if (count(LaravelLocalization::getSupportedLocales()) > 1)
    <ul class="flex flex-wrap justify-end -mx-3">
        @foreach (LaravelLocalization::getSupportedLocales() as $key => $lang)
            <li class="mx-3">
                @if ($key === LaravelLocalization::getCurrentLocale())
                    <span class="block py-3 text-blue-600">
                        {{ $lang['native'] }}
                </span>
                @else
                    <a href="{{ LaravelLocalization::getLocalizedURL($key) }}"
                       class="block py-3 text-green-600 hover:text-green-800">
                        {{ $lang['native'] }}
                    </a>
                @endif
            </li>
        @endforeach
    </ul>
@endif