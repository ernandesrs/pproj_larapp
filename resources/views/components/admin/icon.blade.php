@props([
    'name' => 'app',
])

<i {{ $attributes->merge(['class' => 'bi bi-' . $name]) }}></i>
