@props(['muted'])

@php
    $muted = $muted ?? false;
@endphp

<p
    {{ $attributes->merge([
        'class' => 'cursor-default ' . ($muted ? 'text-gray-400' : 'text-gray-600') . ' mb-2',
    ]) }}>
    {{ $slot }}
</p>
