@props([
    'text' => 'H3 title via prop "text"',
    'icon' => null,
])

<h2
    {{ $attributes->merge([
        'class' => 'flex items-center text-normal lg:text-lg font-semibold text-gray-500 mb-4',
    ]) }}>
    @if ($icon ?? null)
        <x-customer.icon icon="{{ $icon }}" class="text-lg lg:text-xl mr-3" />
    @endif
    <span>{{ $text }}</span>
</h2>
