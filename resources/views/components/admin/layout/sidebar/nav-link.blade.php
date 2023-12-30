@props([
    'toggler' => false,
    'href' => '#',
    'text' => null,
    'icon' => null,
    'active' => false,
])

@php
    if (!$toggler) {
        $attributes = $attributes->merge(['wire:navigate' => true]);
    }

    $styles = implode(' ', [
        // default
        'flex items-center px-8 py-3 mb-2 text-admin-light-dark-2 border-l-4 duration-300 ',
        !$toggler ? 'hover:border-admin-primary-normal' : 'hover:text-opacity-50',
        $active && !$toggler ? 'border-admin-primary-normal bg-admin-dark-dark-1 pointer-events-none' : 'border-transparent',
        $active && $toggler ? 'text-opacity-50' : '',
    ]);

@endphp

<a
    class=" {{ $styles }}"
    href="{{ $href }}"
    {{ $attributes }}>

    @if ($icon)
        <x-admin.icon
            class="mr-3 text-xl pointer-events-none" name="{{ $icon }}" />
    @endif

    <span class="pointer-events-none">
        {{ $text }}
    </span>

    @if ($toggler)
        <span class="ml-auto pointer-events-none">
            <x-admin.icon x-show="!show_subnav" name="chevron-right" />
            <x-admin.icon x-show="show_subnav" name="chevron-down" />
        </span>
    @endif

</a>
