@props([])

<div {{ $attributes->merge(['class' => 'w-full p-6 shadow-lg rounded-md']) }}>
    @if ($head ?? null)
        {{ $head }}
    @endif
    {{ $slot }}
</div>
