@unless ($breadcrumbs->isEmpty())
    <ol class="flex flex-wrap justify-start -mx-3">
        @foreach ($breadcrumbs as $breadcrumb)
            <li class="mx-3">
                @if (!is_null($breadcrumb->url) && !$loop->last)
                    <a href="{{ $breadcrumb->url }}" class="block py-3 text-green-600 hover:text-green-800">
                        {{ $breadcrumb->title }}
                    </a>
                @else
                    <span class="block py-3 text-blue-600">
                        {{ $breadcrumb->title }}
                    </span>
                @endif
            </li>
        @endforeach
    </ol>
@endunless