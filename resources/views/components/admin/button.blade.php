@props(['as', 'type', 'variant', 'text', 'prependIcon', 'appendIcon', 'full', 'small', 'large'])

@php
    $small = $small ?? false;
    $large = $large ?? false;

    $class = 'button' . ($small ? ' button-sm' : ($large ? ' button-lg' : '')) . ($full ?? false ? ' w-full' : '') . ' button-' . ($variant ?? 'primary');
@endphp

@if (($as ?? 'button') == 'button')
    <button type="{{ $type ?? 'button' }}" class="{{ $class }}" {{ $attributes }}>
        @isset($prependIcon)
            <i class="bi bi-{{ $prependIcon }} mr-2"></i>
        @endisset
        <span class="text">{{ $text }}</span>
        @isset($appendIcon)
            <i class="bi bi-{{ $appendIcon }} ml-2"></i>
        @endisset
    </button>
@else
    <a class="{{ $class }}" {{ $attributes }} {{ $attributes }}>
        @isset($prependIcon)
            <i class="bi bi-{{ $prependIcon }} mr-2"></i>
        @endisset
        <span class="text">{{ $text }}</span>
        @isset($appendIcon)
            <i class="bi bi-{{ $appendIcon }} ml-2"></i>
        @endisset
    </a>
@endif
