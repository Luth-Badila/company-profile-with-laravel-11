{{-- @props(['active' => false])

<a {{ $attributes }} class="{{ $active ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white" }} rounded-md px-3 py-2 text-sm font-medium" aria-current="{{ $active ? "page" : false }}">{{ $slot }}</a> --}}

@props(['active' => false])

<a {{ $attributes }} class="nav-link {{ $active ? 'active text-white bg-dark rounded-pill' : 'text-muted' }} px-3 py-2 rounded-md" aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>

