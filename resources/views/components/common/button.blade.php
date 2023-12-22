@props(['as', 'type', 'variant', 'text', 'prependIcon', 'appendIcon', 'full', 'small', 'large', 'loading'])

@php
    $small = $small ?? false;
    $large = $large ?? false;
    $loading = $loading ?? false;

    $class = 'button' . ($small ? ' button-sm' : ($large ? ' button-lg' : '')) . ($full ?? false ? ' w-full' : '') . ' button-' . ($variant ?? 'primary') . ($loading ? ' button-disabled' : '');
@endphp

@if (($as ?? 'button') == 'button')
    <button type="{{ $type ?? 'button' }}" class="{{ $class }}" {{ $attributes }}>
        @if ($loading)
            <span class="animate-spin inline-block mr-2">
                <i class="bi bi-arrow-clockwise"></i>
            </span>
        @endif

        @if (isset($prependIcon) && !$loading)
            <i class="bi bi-{{ $prependIcon }} {{ $text ?? null ? 'mr-2' : '' }}"></i>
        @endif
        <span class="text">{{ $text }}</span>
        @if (isset($appendIcon) && !$loading)
            <i class="bi bi-{{ $appendIcon }} {{ $text ?? null ? 'ml-2' : '' }}"></i>
        @endif
    </button>
@else
    <a class="{{ $class }}" {{ $attributes }} {{ $attributes }}>
        @if ($loading)
            <span class="animate-spin inline-block mr-2">
                <i class="bi bi-arrow-clockwise"></i>
            </span>
        @endif

        @if (isset($prependIcon) && !$loading)
            <i class="bi bi-{{ $prependIcon }} {{ $text ?? null ? 'mr-2' : '' }}"></i>
        @endif
        <span class="text">{{ $text }}</span>
        @if (isset($appendIcon) && !$loading)
            <i class="bi bi-{{ $appendIcon }} {{ $text ?? null ? 'ml-2' : '' }}"></i>
        @endif
    </a>
@endif
