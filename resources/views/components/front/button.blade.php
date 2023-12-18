@props(['as', 'type', 'variant', 'text', 'full'])

@php
    $class = 'button' . ($full ?? false ? ' w-full' : '') . ' button-' . ($variant ?? 'primary');
@endphp

@if (($as ?? 'button') == 'button')
    <button type="{{ $type ?? 'button' }}" class="{{ $class }}" {{ $attributes }}>
        {{ $text }}
    </button>
@else
    <a class="{{ $class }}" {{ $attributes }} {{ $attributes }}>
        {{ $text }}
    </a>
@endif
