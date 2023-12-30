@props([])

<div>
    <x-admin.layout-partials.header />

    <x-admin.layout-partials.main>
        {{ $slot }}
    </x-admin.layout-partials.main>
</div>
