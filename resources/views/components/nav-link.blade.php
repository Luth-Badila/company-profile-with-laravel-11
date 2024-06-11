@props(['active' => false])

<a {{ $attributes }} class="nav-link {{ $active ? 'active text-black bg-white rounded-pill' : 'text-white' }} px-3 py-2 rounded-md" aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>

