
@props(['active' => false])

@php
    $classes = 'block px-2 text-left hover:bg-gray-300 focus:bg-gray-300';
    if($active) $classes .= ' bg-blue-300 text-white';
@endphp



<a {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</a>