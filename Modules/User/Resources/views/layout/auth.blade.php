<ul class="flex flex-wrap justify-end -mx-3">
    @foreach($routes as $route)
        <li class="mx-3">
            @if(route($route) === $current)
                <span class="block py-3 text-blue-600">
                        @lang('user::breadcrumbs.' . $route)
                </span>
            @elseif($pages)
                <a href="{{ route($route) }}" class="block py-3 text-green-600 hover:text-green-800">
                    @lang('user::breadcrumbs.' . $route)
                </a>
            @else
                {{-- todo modal --}}
            @endif
        </li>
    @endforeach
</ul>