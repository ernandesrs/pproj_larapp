@props(['icon'])

<i {{ $attributes->merge(['class' => 'icon bi bi-' . $icon]) }}></i>
