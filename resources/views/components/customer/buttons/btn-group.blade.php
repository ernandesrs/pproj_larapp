@props([
    'showActionCreate' => false,
])

<div {{ $attributes->merge(['class' => 'flex items-center relative rounded-full']) }}>
    {{ $slot }}
</div>
