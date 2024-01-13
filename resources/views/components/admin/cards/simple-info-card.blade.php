@props([
    'title' => null,
    'icon' => 'app',
    'variant' => 'primary',
])

@php

    $variantsConfig = [
        'primary' => [
            'container' => 'border-admin-primary-light-2 dark:border-admin-primary-dark-2',
            'iconContainer' => 'bg-admin-primary-normal dark:bg-admin-primary-dark-2',
        ],
        'secondary' => [
            'container' => 'border-admin-secondary-light-2 dark:border-admin-secondary-dark-2',
            'iconContainer' => 'bg-admin-secondary-normal dark:bg-admin-secondary-dark-2',
        ],
        'success' => [
            'container' => 'border-admin-success-light-1 dark:border-admin-success-dark-2',
            'iconContainer' => 'bg-admin-success-dark-1 dark:bg-admin-success-dark-2',
        ],
        'info' => [
            'container' => 'border-admin-info-light-2 dark:border-admin-info-dark-2',
            'iconContainer' => 'bg-admin-info-normal dark:bg-admin-info-dark-2',
        ],
        'danger' => [
            'container' => 'border-admin-danger-light-2 dark:border-admin-danger-dark-2',
            'iconContainer' => 'bg-admin-danger-normal dark:bg-admin-danger-dark-2',
        ],
        'dark' => [
            'container' => 'border-admin-dark-light-2 border-opacity-50',
            'iconContainer' => 'bg-admin-dark-normal',
        ],
        'light' => [
            'container' => 'border-admin-light-normal dark:border-admin-light-dark-2',
            'iconContainer' => 'bg-admin-light-normal dark:bg-admin-light-dark-2',
        ],
    ];

@endphp

<div
    {{ $attributes->merge(['class' => 'group p-5 border rounded-sm duration-300 shadow-sm hover:shadow-md cursor-default text-admin-dark-light-2 dark:text-admin-light-dark-1 ' . $variantsConfig[$variant]['container']]) }}>
    <div class="flex">
        <div
            class="w-14 h-14 rounded-full flex items-center justify-center duration-300 {{ $variantsConfig[$variant]['iconContainer'] }} group-hover:scale-105">
            <x-admin.icon
                name="{{ $icon }}"
                class="text-xl {{ $variant == 'light' ? 'text-admin-dark-light-2 text-opacity-75 dark:text-admin-white' : 'text-admin-light-normal' }}" />
        </div>
        <div class="ml-3">
            @if (!empty($title))
                <div class="font-semibold text-lg md:text-xl mb-1">
                    {{ $title }}
                </div>
            @endif
            <div>
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
