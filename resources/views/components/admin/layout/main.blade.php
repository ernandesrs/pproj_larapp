@props([])

<main class="overflow-y-auto" style="height: calc(100vh - 4rem)">

    <x-common.alert closable />

    <div class="container min-h-full flex">
        {{ $slot }}
    </div>
</main>
