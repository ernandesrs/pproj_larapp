@props([
    'target' => null,
])

@php
    if (empty($target)) {
        throw new \Exception('Needs a value to target prop, the value must be the ID of the element to be activated.');
    }
@endphp

<div
    x-on:click.prevent="$dispatch('activator_clicked', {{ json_encode(['target' => $target]) }})">
    {{ $slot }}
</div>
