@props([])

<main class="overflow-y-auto" style="height: calc(100vh - 4rem)">
    <div class="container min-h-full flex">
        {{ $slot }}
    </div>
</main>
