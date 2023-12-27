@props([
    'text' => 'H2 title via prop "text"',
    'icon' => null,
])

<h2
    {{ $attributes->merge([
        'class' => 'flex items-center text-xl lg:text-2xl font-bold text-gray-600 mb-4',
    ]) }}>
    @if ($icon ?? null)
        <x-customer.icon icon="{{ $icon }}" class="text-2xl lg:text-3xl mr-2" />
    @endif
    <span>{{ $text }}</span>
</h2>
