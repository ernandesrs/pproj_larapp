@props(['items'])

<nav class="flex flex-wrap">
    @foreach ($items ?? [] as $item)
        @php
            $active = in_array(\Route::currentRouteName(), $item['activeIn'] ?? []);
        @endphp
        <a
            wire:navigate
            class="group w-full flex items-center px-6 py-4 text-customer-white rounded-2xl mb-1 duration-300 hover:bg-customer-white hover:text-customer-dark-normal hover:font-medium {{ $active ? 'bg-customer-white !text-customer-dark-normal font-medium' : '' }}"
            href="{{ $item['href'] }}">
            <x-customer.icon icon="{{ $item['icon'] }}"
                class="text-xl group-hover:text-customer-primary-normal duration-300 {{ $active ? 'text-customer-primary-normal' : 'text-customer-white' }}" />

            <span class="ml-3">
                {{ $item['text'] }}
            </span>
        </a>
    @endforeach
</nav>
