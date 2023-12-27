@props(['items'])

<nav class="flex flex-wrap">
    @foreach ($items ?? [] as $item)
        @php
            $active = in_array(\Route::currentRouteName(), $item['activeIn'] ?? []);
        @endphp
        <a
            wire:navigate
            class="group w-full flex items-center px-6 py-4 text-customer-white rounded-2xl mb-1 duration-300 hover:bg-customer-white hover:text-gray-800 hover:font-medium {{ $active ? 'bg-white !text-gray-800 font-medium' : '' }}"
            href="{{ $item['href'] }}">
            <x-customer.icon icon="{{ $item['icon'] }}"
                class="text-xl text-customer-white group-hover:text-customer-primary-normal duration-300 {{ $active ? 'text-customer-primary-normal' : '' }}" />

            <span class="ml-3">
                {{ $item['text'] }}
            </span>
        </a>
    @endforeach
</nav>
