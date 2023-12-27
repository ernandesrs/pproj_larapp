@props([])

<div {{ $attributes->merge(['class' => 'w-full p-6 shadow-lg rounded-3xl']) }}>
    @if ($head ?? null)
        {{ $head }}
    @endif
    {{ $slot }}
</div>
