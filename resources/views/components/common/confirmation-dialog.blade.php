@props(['id', 'type', 'title', 'text', 'confirmAction'])

@php
    $variant = ['default' => 'danger', 'danger' => 'danger', 'success' => 'success', 'info' => 'info'][$type ?? 'default'];
@endphp

<x-common.dialog id="{{ $id }}" title="{{ $title }}">
    <x-slot name="content">
        {{ $text }}
    </x-slot>

    <x-slot name="actions">
        <x-common.button wire:loading.remove wire:click="{{ $confirmAction }}" text="Confirm" variant="{{ $variant }}"
            prepend-icon="check-lg" />

        <x-common.button wire:loading text="Confirm" variant="{{ $variant }}" loading />
    </x-slot>
</x-common.dialog>
