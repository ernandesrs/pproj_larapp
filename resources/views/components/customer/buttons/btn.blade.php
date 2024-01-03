@props([
    'as' => 'button',
    'text' => null,
    'prependIcon' => null,
    'appendIcon' => null,
    'variant' => 'primary',

    'outlined' => false,
    'link' => false,

    'noBg' => false,
    'noTransform' => false,
    'flat' => false,

    'extraSmall' => false,
    'small' => false,
    'large' => false,

    'loading' => false,
])

{{--
    bg-customer-white

    to-customer-primary-normal
    from-customer-primary-light-1
    hover:to-customer-primary-normal
    border-customer-primary-normal
    text-customer-primary-normal

    to-customer-secondary-normal
    from-customer-secondary-light-1
    hover:to-customer-secondary-normal
    border-customer-secondary-normal
    text-customer-secondary-normal

    to-customer-info-normal
    from-customer-info-light-1
    hover:to-customer-info-normal
    border-customer-info-normal
    text-customer-info-normal

    to-customer-danger-normal
    from-customer-danger-light-1
    hover:to-customer-danger-normal
    border-customer-danger-normal
    text-customer-danger-normal

    to-customer-success-normal
    from-customer-success-light-1
    hover:to-customer-success-normal
    border-customer-success-normal
    text-customer-success-normal

    to-customer-light-normal
    from-customer-light-light-1
    hover:to-customer-light-normal
    border-customer-light-normal
    text-customer-light-normal

    to-customer-dark-normal
    from-customer-dark-light-1
    hover:to-customer-dark-normal
    border-customer-dark-normal
    text-customer-dark-normal

--}}

@php
    $styles = [
        // default
        'flex items-center rounded-full shadow duration-300 whitespace-nowrap',

        // button background, when the button is not outlined or link
        !$outlined && !$link ? 'bg-gradient-to-br ' . 'to-customer-' . $variant . '-normal from-customer-' . $variant . '-light-1 hover:from-customer-' . $variant . '-normal' : '',

        // border
        !$link ? ' border border-customer-' . $variant . '-normal' : '',

        // button background/border when the button is outlined(white or transparent background)
        $outlined ? ($noBg ? 'bg-transparent' : 'bg-customer-white bg-opacity-90') : '',

        // button background when the button is link
        $link ? 'shadow-none hover:shadow-none hover:underline' : '',

        // remove shadown on hover when button is flat
        $flat ? '' : 'hover:shadow-lg',

        // button has scale effect when button is not flat or noTransform is false
        $noTransform || $flat ? '' : 'hover:scale-105',

        // button padding when button not have text
        empty($text) ? ($extraSmall ? 'px-3 py-2' : ($small ? 'px-3 py-2' : ($large ? 'px-5 py-4' : 'px-4 py-3'))) : '',

        // button padding when button have text
        !empty($text) ? ($extraSmall ? 'px-5 py-2' : ($small ? 'px-5 py-3' : ($large ? 'px-10 py-4' : 'px-8 py-4'))) : '',

        // text sizes
        $extraSmall ? 'text-xs' : ($small ? 'text-sm' : ($large ? 'text-lg' : 'text-base')),

        // text color when button is link or outlined
        ($outlined || $link) && $variant != 'light' ? 'text-customer-' . $variant . '-normal' : ($variant != 'light' ? 'text-customer-white' : ''),

        // text color when button is not link or outlined
        $variant == 'light' ? 'text-customer-dark-normal text-opacity-50 hover:text-opacity-80' : '',

        // button is loading
        $loading ? 'loading' : '',
    ];
@endphp

@if ($as == 'button')
    <button
        {{ $attributes->merge([
            'class' => implode(' ', $styles),
        ]) }}
        {{ $attributes }}>
        @if ($prependIcon)
            <x-customer.icon icon="{{ $prependIcon }}" class="{{ empty($text) ? '' : 'mr-2' }}" />
        @endif
        <span>{{ $text }}</span>
        @if ($appendIcon)
            <x-customer.icon icon="{{ $appendIcon }}" class="{{ empty($text) ? '' : 'ml-2' }}" />
        @endif
    </button>
@else
    <a
        {{ $attributes->merge([
            'class' => implode(' ', $styles),
        ]) }}
        {{ $attributes }}>
        @if ($prependIcon)
            <x-customer.icon icon="{{ $prependIcon }}" class="{{ empty($text) ? '' : 'mr-2' }}" />
        @endif
        <span>{{ $text }}</span>
        @if ($appendIcon)
            <x-customer.icon icon="{{ $appendIcon }}" class="{{ empty($text) ? '' : 'ml-2' }}" />
        @endif
    </a>
@endif
