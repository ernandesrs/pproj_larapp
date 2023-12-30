@props([
    'as' => 'button',
    'text' => null,
    'variant' => 'primary',

    'xs' => false,
    'sm' => false,
    'lg' => false,
])

@php
    $variants = [
        'primary' => 'from-admin-primary-dark-1 to-admin-primary-normal text-admin-white border-admin-primary-normal',
        'secondary' => 'from-admin-secondary-dark-1 to-admin-secondary-normal text-admin-white border-admin-secondary-normal',
        'success' => 'from-admin-success-dark-1 to-admin-success-normal text-admin-white border-admin-success-normal',
        'danger' => 'from-admin-danger-dark-1 to-admin-danger-normal text-admin-white border-admin-danger-normal',
        'info' => 'from-admin-info-dark-1 to-admin-info-normal text-admin-white border-admin-info-normal',
        'light' => 'from-admin-light-normal to-admin-light-light-2 text-admin-dark-light-2 border-admin-light-normal',
        'dark' => 'from-admin-dark-dark-1 to-admin-dark-normal text-admin-light-normal border-admin-dark-normal',
    ];

    $style = [
        // default
        'flex flex-wrap items-center whitespace-nowrap border duration-300 shadow-sm cursor-pointer bg-gradient-to-tl hover:shadow-md hover:opacity-90 hover:scale-105',

        // variant
        $variants[$variant] ?? $variants['primary'],

        // size when empty text
        empty($text) ? (($xs ? 'px-3 py-2' : $sm) ? 'px-3 py-2' : ($lg ? 'px-5 py-4' : 'px-4 py-3')) : '',

        // size when not empty text
        !empty($text) ? (($xs ? 'px-5 py-2' : $sm) ? 'px-5 py-3' : ($lg ? 'px-12 py-4' : 'px-8 py-3')) : '',

        // text-size
        $xs ? 'text-xs' : ($sm ? 'text-sm' : ($lg ? 'text-lg' : 'text-base')),
    ];

@endphp

@if ($as == 'button')
    <button {{ $attributes->merge(['class' => implode(' ', $style)]) }}>
        @if (!empty($text))
            <span>{{ $text }}</span>
        @endif
    </button>
@else
    <a {{ $attributes->merge(['class' => implode(' ', $style)]) }}>
        @if (!empty($text))
            <span>{{ $text }}</span>
        @endif
    </a>
@endif
