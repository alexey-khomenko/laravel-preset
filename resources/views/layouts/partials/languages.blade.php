<ol class="flex space-x-4 justify-end">
    @foreach (LaravelLocalization::getSupportedLocales() as $key => $lang)
        <li class="p-3">
            @if ($key === LaravelLocalization::getCurrentLocale())
                <span class="text-green-500">
                        {{ $lang['native'] }}
                </span>
            @else
                <a href="{{ LaravelLocalization::getLocalizedURL($key) }}" class="text-red-500 hover:text-red-800">
                    {{ $lang['native'] }}
                </a>
            @endif
        </li>
    @endforeach
</ol>