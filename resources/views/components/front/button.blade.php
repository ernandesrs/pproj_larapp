@props(['type', 'variant', 'text', 'full'])

@php
    $class = 'button' . ($full ?? false ? ' w-full' : '') . ' button-' . ($variant ?? 'primary');
@endphp

<button type="{{ $type ?? 'button' }}" class="{{ $class }}" {{ $attributes }}>
    {{ $text }}
</button>
