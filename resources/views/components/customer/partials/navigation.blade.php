@props(['items'])

<nav class="flex flex-wrap">
    @foreach ($items ?? [] as $item)
        <a
            wire:navigate
            class="w-full flex items-center px-6 py-4 text-white rounded-2xl mb-1 duration-300 hover:bg-white hover:text-gray-800 hover:font-medium {{ in_array(\Route::currentRouteName(), $item['activeIn'] ?? []) ? 'bg-white text-gray-800 font-medium' : '' }}"
            href="{{ $item['href'] }}">
            {{ $item['text'] }}
        </a>
    @endforeach
</nav>
