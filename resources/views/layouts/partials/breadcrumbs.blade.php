@unless ($breadcrumbs->isEmpty())
    <ol class="flex space-x-4 justify-start">
        @foreach ($breadcrumbs as $breadcrumb)
            <li class="py-3">
                @if (!is_null($breadcrumb->url) && !$loop->last)
                    <a href="{{ $breadcrumb->url }}" class="text-red-500 hover:text-red-800">
                        {{ $breadcrumb->title }}
                    </a>
                @else
                    <span class="text-green-500">
                        {{ $breadcrumb->title }}
                    </span>
                @endif
            </li>
        @endforeach
    </ol>
@endunless