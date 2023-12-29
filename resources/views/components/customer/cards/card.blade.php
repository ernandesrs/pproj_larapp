@props([])

<div {{ $attributes->merge(['class' => 'w-full p-6 shadow-lg rounded-3xl bg-customer-white']) }}>
    @if ($head ?? null)
        {{ $head }}
    @endif
    {{ $slot }}
</div>
