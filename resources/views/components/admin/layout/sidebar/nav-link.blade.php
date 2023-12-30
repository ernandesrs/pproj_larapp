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
@endphp

<a
    class="flex items-center px-8 py-3 text-admin-white border-l-4 hover:border-admin-primary-normal duration-300 {{ $active ? 'border-admin-primary-normal bg-admin-dark-dark-1' : 'border-transparent' }}"
    href="{{ $href }}"
    {{ $attributes }}>

    @if ($icon)
        <x-admin.icon
            class="mr-3 text-xl" name="{{ $icon }}" />
    @endif

    <span>
        {{ $text }}
    </span>

    @if ($toggler)
        <x-admin.icon
            class="ml-auto" name="{{ $active ? 'chevron-right' : 'chevron-down' }}" />
    @endif

</a>
