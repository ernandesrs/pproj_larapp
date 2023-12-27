@props(['text', 'icon'])

<h1
    {{ $attributes->merge(['class' => 'flex items-center text-2xl lg:text-3xl xl:text-4xl font-bold text-customer-dark-ligth-2 mb-4']) }}>
    @if ($icon ?? null)
        <x-customer.icon icon="{{ $icon }}" class="text-3xl lg:text-4xl xl:text-5xl mr-2" />
    @endif
    <span>{{ $text }}</span>
</h1>
