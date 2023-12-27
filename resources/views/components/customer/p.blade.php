@props([
    'muted' => false,
    'size' => 'normal',
])

@php
    $muted = $muted ?? false;
@endphp

<p
    {{ $attributes->merge([
        'class' => implode(' ', ['cursor-default mb-2', $muted ? 'text-gray-400' : 'text-gray-600', 'text-' . $size]),
    ]) }}
    {{ $attributes }}>
    {{ $slot }}
</p>
