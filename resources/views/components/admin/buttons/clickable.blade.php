@props([
    'as' => 'button',
    'external' => false,
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
    'loading' => false,
])

@php
    $variants = [
        'default' => [
            'primary' => implode(' ', [
                // default
                'from-admin-primary-dark-1 to-admin-primary-normal text-admin-white border-admin-primary-normal',

                // dark
                'dark:from-admin-primary-dark-2 dark:to-admin-primary-dark-1 dark:border-admin-primary-dark-2',
            ]),
            'secondary' => implode(' ', [
                // default
                'from-admin-secondary-dark-1 to-admin-secondary-normal text-admin-white border-admin-secondary-normal',

                // dark
                'dark:from-admin-secondary-dark-2 dark:to-admin-secondary-dark-1 dark:border-admin-secondary-dark-2',
            ]),
            'success' => implode(' ', [
                // default
                'from-admin-success-dark-1 to-admin-success-normal text-admin-white border-admin-success-normal',

                // dark
                'dark:from-admin-success-dark-2 dark:to-admin-success-dark-1 dark:border-admin-success-dark-2',
            ]),
            'danger' => implode(' ', [
                // default
                'from-admin-danger-dark-1 to-admin-danger-normal text-admin-white border-admin-danger-normal',

                // dark
                'dark:from-admin-danger-dark-2 dark:to-admin-danger-dark-1 dark:border-admin-danger-dark-2',
            ]),
            'info' => implode(' ', [
                // default
                'from-admin-info-dark-1 to-admin-info-normal text-admin-white border-admin-info-normal',

                // dark
                'dark:from-admin-info-dark-2 dark:to-admin-info-dark-1 dark:border-admin-info-dark-2',
            ]),
            'light' => implode(' ', [
                // default
                'from-admin-light-normal to-admin-light-light-2 text-admin-dark-light-2 border-admin-light-normal',

                // dark
                'dark:from-admin-light-dark-2 dark:to-admin-light-dark-1 dark:border-admin-light-dark-2',
            ]),
            'dark' => implode(' ', [
                // default
                'from-admin-dark-dark-1 to-admin-dark-normal text-admin-light-normal border-admin-dark-normal',

                // dark
                'dark:from-admin-dark-dark-2 dark:to-admin-dark-dark-1 dark:border-admin-dark-dark-1',
            ]),
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
        'flex items-center whitespace-nowrap duration-300 cursor-pointer disabled:cursor-default disabled:pointer-events-none disabled:opacity-90' . ($outlined || $link ? '' : ' bg-gradient-to-tl ') . ' hover:opacity-90',

        $flat || $noTransform ? '' : 'hover:scale-105',

        $link ? 'hover:underline' : 'border shadow-sm hover:shadow-md',

        // variant
        $outlined || $link ? $variants['outlined'][$variant] ?? $variants['outlined']['primary'] : $variants['default'][$variant] ?? $variants['default']['primary'],

        // size when empty text
        empty($text) ? ($xs ? 'px-3 py-2' : ($sm ? 'px-3 py-2' : ($lg ? 'px-5 py-4' : 'px-4 py-3'))) : '',

        // size when not empty text
        !empty($text) ? ($xs ? 'px-5 py-2' : ($sm ? 'px-5 py-3' : ($lg ? 'px-12 py-4' : 'px-6 py-3'))) : '',

        // text-size
        $xs ? 'text-xs' : ($sm ? 'text-sm' : ($lg ? 'text-lg' : 'text-base')),

        $loading ? 'animate-pulse' : '',
    ];

    if ($loading) {
        $attributes = $attributes->merge(['disabled' => true]);
    }

    if ($as == 'link' && !$external) {
        $attributes = $attributes->merge(['wire:navigate' => true]);
    }

@endphp

@if ($as == 'button')
    <button {{ $attributes->merge(['class' => implode(' ', $style)]) }}>
        @if ($loading)
            <x-admin.icon
                name="arrow-clockwise"
                class="pointer-events-none {{ empty($text) ? '' : 'mr-2' }} {{ $loading ? 'animate-spin' : '' }}" />
        @endif
        @if ($prependIcon && !$loading)
            <x-admin.icon
                name="{{ $prependIcon }}"
                class="pointer-events-none {{ empty($text) ? '' : 'mr-2' }}" />
        @endif
        @if (!empty($text))
            <span class="pointer-events-none">{{ $text }}</span>
        @endif
        @if ($appendIcon && !$loading)
            <x-admin.icon
                name="{{ $appendIcon }}"
                class="pointer-events-none {{ empty($text) ? '' : ' ml-2' }}" />
        @endif
    </button>
@else
    <a {{ $attributes->merge(['class' => implode(' ', $style)]) }}>
        @if ($prependIcon)
            <x-admin.icon
                name="{{ $prependIcon }}"
                class="pointer-events-none {{ empty($text) ? '' : 'mr-2' }}" />
        @endif
        @if (!empty($text))
            <span class="pointer-events-none">{{ $text }}</span>
        @endif
        @if ($appendIcon)
            <x-admin.icon
                name="{{ $appendIcon }}"
                class="pointer-events-none {{ empty($text) ? '' : ' ml-2' }}" />
        @endif
    </a>
@endif
