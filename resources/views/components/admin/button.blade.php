@props(['as', 'type', 'variant', 'text', 'full', 'small', 'large'])

@php
    $small = $small ?? false;
    $large = $large ?? false;

    $class = 'button' . ($small ? ' button-sm' : ($large ? ' button-lg' : '')) . ($full ?? false ? ' w-full' : '') . ' button-' . ($variant ?? 'primary');
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
