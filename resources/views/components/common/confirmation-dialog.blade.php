@props(['id', 'type', 'title', 'text', 'confirmAction'])

@php
    $variant = ['default' => 'danger', 'danger' => 'danger', 'success' => 'success', 'info' => 'info'][$type ?? 'default'];
    $title = $title ?? __('messages.confirmation.default_title');
    $text = $text ?? __('messages.confirmation.default_text');
@endphp

<x-common.dialog id="{{ $id }}" title="{{ $title }}" {{ $attributes }}>
    <x-slot name="content">
        {{ $text }}
    </x-slot>

    <x-slot name="actions">
        <x-common.button wire:loading.remove wire:click="{{ $confirmAction }}" text="{{ __('words.confirm') }}"
            variant="{{ $variant }}" prepend-icon="check-lg" />

        <x-common.button wire:loading text="{{ __('words.wait') }}" variant="{{ $variant }}" loading />
    </x-slot>
</x-common.dialog>