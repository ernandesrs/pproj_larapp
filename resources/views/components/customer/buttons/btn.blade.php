@props([
    'as' => 'button',
    'text' => null,
    'prependIcon' => null,
    'appendIcon' => null,
    'variant' => 'primary',
    'outlined' => false,
    'link' => false,
    'noBg' => false,
    'small' => false,
    'large' => false,
])

{{--
    bg-customer-white

    from-customer-primary-normal
    to-customer-primary-light-2
    hover:to-customer-primary-normal
    border-customer-primary-normal
    text-customer-primary-normal

    from-customer-secondary-normal
    to-customer-secondary-light-2
    hover:to-customer-secondary-normal
    border-customer-secondary-normal
    text-customer-secondary-normal

    from-customer-info-normal
    to-customer-info-light-2
    hover:to-customer-info-normal
    border-customer-info-normal
    text-customer-info-normal

    from-customer-danger-normal
    to-customer-danger-light-2
    hover:to-customer-danger-normal
    border-customer-danger-normal
    text-customer-danger-normal

    from-customer-success-normal
    to-customer-success-light-2
    hover:to-customer-success-normal
    border-customer-success-normal
    text-customer-success-normal

--}}

@php
    $styles = [
        // default
        'flex items-center rounded-full ' . ($outlined || $link ? '' : 'bg-gradient-to-br') . ' shadow duration-300',

        // sizes and quare button if text is empty
        $small ? ('text-sm ' . empty($text) ? 'px-3 py-2' : 'px-5 py-2') : ($large ? ('text-lg ' . empty($text) ? 'px-5 py-4' : 'px-10 py-4') : 'text-base ' . (empty($text) ? 'px-4 py-3' : 'px-8 py-4')),

        // text color
        $outlined || $link ? 'text-customer-' . $variant . '-normal' : 'text-white',

        // bg-color: from bg
        $outlined ? ($noBg ? 'bg-transparent' : 'bg-customer-white') . ' bg-opacity-90 border border-customer-' . $variant . '-normal' : ($link ? 'shadow-none hover:shadow-none hover:underline hover:scale-100' : 'from-customer-' . $variant . '-normal'),

        // bg-color: to bg
        $outlined || $link ? '' : 'to-customer-' . $variant . '-light-2',

        // hover
        'hover:shadow-lg hover:to-customer-' . $variant . '-normal hover:scale-105',
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
