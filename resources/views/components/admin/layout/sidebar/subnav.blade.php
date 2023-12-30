@props([
    'subNav' => [],
])

<div
    x-data="{
        ...{{ json_encode(['show_subnav' => in_array(\Route::currentRouteName(), $subNav['activeIn'] ?? [])]) }},
    }">
    {{-- subnav toggler --}}
    <x-admin.layout.sidebar.nav-link
        x-on:click="show_subnav = !show_subnav"
        toggler
        icon="{{ $subNav['icon'] }}"
        text="{{ $subNav['text'] }}"
        :active="in_array(\Route::currentRouteName(), $subNav['activeIn'] ?? [])" />

    {{-- subnav links --}}
    <nav
        x-show="show_subnav"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 -translate-y-0"
        x-transition:leave="transition ease-in duration-100"
        x-transition:leave-start="opacity-100 -translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"

        class="pl-4">
        @foreach ($subNav['items'] as $link)
            <x-admin.layout.sidebar.nav-link
                icon="{{ $link['icon'] }}"
                text="{{ $link['text'] }}"
                href="{{ $link['href'] }}"
                :active="in_array(\Route::currentRouteName(), $link['activeIn'] ?? [])" />
        @endforeach
    </nav>

</div>
