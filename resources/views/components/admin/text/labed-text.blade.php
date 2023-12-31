@props([
    'bottom' => false,
    'text' => null,
    'label' => null,
])

<div
    {{ $attributes }}>
    @if (!$bottom)
        <p class="text-sm">{{ $label }}</p>
    @endif
    <p
        class="font-semibold text-admin-dark-normal dark:text-admin-dark-light-2">
        {{ $text }}
    </p>
    @if ($bottom)
        <p class="text-sm">{{ $label }}</p>
    @endif
</div>
