@props([
    'nav' => [],
])

<div class="mb-8">
    <h5 class="text-xs uppercase px-8 mb-3">
        {{ $nav['title'] }}
    </h5>

    <x-admin.layout.sidebar.nav>
        @foreach ($nav['items'] as $link)
            @if ($link['items'] ?? null)
            @else
                <x-admin.layout.sidebar.nav-link
                    icon="{{ $link['icon'] }}"
                    text="{{ $link['text'] }}"
                    href="{{ $link['href'] }}"
                    :active="in_array(\Route::currentRouteName(), $link['activeIn'] ?? [])" />
            @endif
        @endforeach
    </x-admin.layout.sidebar.nav>
</div>
