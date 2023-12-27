@props([
    'text' => 'H3 title via prop "text"',
    'icon' => null,
])

<h2
    {{ $attributes->merge([
        'class' => 'flex items-center text-lg lg:text-xl font-semibold text-gray-500 mb-4',
    ]) }}>
    @if ($icon ?? null)
        <x-customer.icon icon="{{ $icon }}" class="text-xl lg:text-2xl mr-2" />
    @endif
    <span>{{ $text }}</span>
</h2>
