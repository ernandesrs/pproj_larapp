@props([
    'as' => 'button',
    'prependIcon' => null,
    'appendIcon' => null,
    'text' => null,
    'variant' => 'primary',

    'xs' => false,
    'sm' => false,
    'lg' => false,

    'outlined' => false,
    'flat' => false,
    'link' => false,
    'noTransform' => false,
])

@php
    $variants = [
        'default' => [
            'primary' => 'from-admin-primary-dark-1 to-admin-primary-normal text-admin-white border-admin-primary-normal',
            'secondary' => 'from-admin-secondary-dark-1 to-admin-secondary-normal text-admin-white border-admin-secondary-normal',
            'success' => 'from-admin-success-dark-1 to-admin-success-normal text-admin-white border-admin-success-normal',
            'danger' => 'from-admin-danger-dark-1 to-admin-danger-normal text-admin-white border-admin-danger-normal',
            'info' => 'from-admin-info-dark-1 to-admin-info-normal text-admin-white border-admin-info-normal',
            'light' => 'from-admin-light-normal to-admin-light-light-2 text-admin-dark-light-2 border-admin-light-normal',
            'dark' => 'from-admin-dark-dark-1 to-admin-dark-normal text-admin-light-normal border-admin-dark-normal',
        ],
        'outlined' => [
            'primary' => 'text-admin-primary-normal border-admin-primary-normal',
            'secondary' => 'text-admin-secondary-normal border-admin-secondary-normal',
            'success' => 'text-admin-success-normal border-admin-success-normal',
            'danger' => 'text-admin-danger-normal border-admin-danger-normal',
            'info' => 'text-admin-info-normal border-admin-info-normal',
            'light' => 'text-admin-light-dark-2 border-admin-light-normal',
            'dark' => 'text-admin-dark-normal border-admin-dark-normal',
        ],
    ];

    $style = [
        // default
        'flex flex-wrap items-center whitespace-nowrap duration-300 cursor-pointer' . ($outlined || $link ? '' : ' bg-gradient-to-tl ') . ' hover:opacity-90',

        $flat || $noTransform ? '' : 'hover:scale-105',

        $link ? 'hover:underline' : 'border shadow-sm hover:shadow-md',

        // variant
        $outlined || $link ? $variants['outlined'][$variant] ?? $variants['outlined']['primary'] : $variants['default'][$variant] ?? $variants['default']['primary'],

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
        @if ($prependIcon)
            <x-admin.icon
                name="{{ $prependIcon }}"
                class="pointer-events-none mr-2" />
        @endif
        @if (!empty($text))
            <span class="pointer-events-none">{{ $text }}</span>
        @endif
        @if ($appendIcon)
            <x-admin.icon
                name="{{ $appendIcon }}"
                class="pointer-events-none ml-2" />
        @endif
    </button>
@else
    <a {{ $attributes->merge(['class' => implode(' ', $style)]) }}>
        @if ($prependIcon)
            <x-admin.icon
                name="{{ $prependIcon }}"
                class="pointer-events-none mr-2" />
        @endif
        @if (!empty($text))
            <span class="pointer-events-none">{{ $text }}</span>
        @endif
        @if ($appendIcon)
            <x-admin.icon
                name="{{ $appendIcon }}"
                class="pointer-events-none ml-2" />
        @endif
    </a>
@endif
