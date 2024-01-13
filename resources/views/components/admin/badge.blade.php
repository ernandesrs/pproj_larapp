@props([
    'variant' => 'primary',
    'prependIcon' => null,
    'appendIcon' => null,
    'text' => '',
    'outlined' => false,
    'dot' => false,
    'sm' => false,
    'lg' => false,
])

@php
    $variants = [
        'primary' => ($outlined ? 'text-admin-primary-normal dark:text-admin-primary-dark-2' : 'bg-admin-primary-normal dark:bg-admin-primary-dark-2 text-admin-light-normal') . ' border border-admin-primary-normal dark:border-admin-primary-dark-2',

        'secondary' => ($outlined ? 'text-admin-secondary-normal dark:text-admin-secondary-dark-2' : 'bg-admin-secondary-normal dark:bg-admin-secondary-dark-2 text-admin-light-normal') . ' border border-admin-secondary-normal dark:border-admin-secondary-dark-2',

        'success' => ($outlined ? 'text-admin-success-normal dark:text-admin-success-dark-2' : 'bg-admin-success-normal dark:bg-admin-success-dark-2 text-admin-light-normal') . ' border border-admin-success-normal dark:border-admin-success-dark-2',

        'info' => ($outlined ? 'text-admin-info-normal dark:text-admin-info-dark-2' : 'bg-admin-info-normal dark:bg-admin-info-dark-2 text-admin-light-normal') . ' border border-admin-info-normal dark:border-admin-info-dark-2',

        'danger' => ($outlined ? 'text-admin-danger-normal dark:text-admin-danger-dark-2' : 'bg-admin-danger-normal dark:bg-admin-danger-dark-2 text-admin-light-normal') . ' border border-admin-danger-normal dark:border-admin-danger-dark-2',

        'light' => ($outlined ? 'text-admin-light-dark-2 dark:text-opacity-60' : 'bg-admin-light-normal dark:bg-admin-dark-normal text-admin-dark-light-2 text-opacity-60 dark:text-admin-light-dark-2') . ' border border-admin-light-normal dark:border-admin-dark-normal',

        'dark' => ($outlined ? 'text-admin-dark-normal dark:text-admin-dark-dark-1' : 'bg-admin-dark-normal dark:bg-admin-dark-dark-1 text-admin-light-normal') . ' border border-admin-dark-normal dark:border-admin-dark-dark-1',
    ];
@endphp

<span
    {{ $attributes->only(['class'])->merge([
        'class' =>
            ($dot
                ? 'p-1 rounded-full '
                : ($sm ? 'px-2 py-1 text-xs' : ($lg ? 'px-2 py-1 text-normal' : 'px-2 py-1 text-sm')) . ' rounded ') .
            $variants[$variant],
    ]) }}>
    @if ($prependIcon)
        <x-admin.icon name="{{ $prependIcon }}"
            class="mr-1 pointer-events-none" />
    @endif
    <span class="pointer-events-none">
        {{ $text }}
    </span>
    @if ($appendIcon)
        <x-admin.icon name="{{ $appendIcon }}"
            class="ml-1 pointer-events-none" />
    @endif
</span>
