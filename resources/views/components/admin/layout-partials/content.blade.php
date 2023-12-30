@props([])

<div class="flex-1 flex flex-col h-screen bg-admin-light-light-2">
    <x-admin.layout-partials.header />

    <x-admin.layout-partials.main>
        {{ $slot }}
    </x-admin.layout-partials.main>
</div>
