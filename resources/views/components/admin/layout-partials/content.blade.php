@props([])

<div class="flex-1 flex flex-col h-screen bg-gradient-to-b from-admin-light-light-1 to-admin-light-light-2 dark:from-admin-dark-dark-2 dark:to-admin-dark-dark-1">
    <x-admin.layout-partials.header />

    <x-admin.layout-partials.main>
        {{ $slot }}
    </x-admin.layout-partials.main>
</div>
