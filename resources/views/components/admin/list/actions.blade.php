@props([
    'wireActionDelete' => null,
    'deleteConfirmText' => __('words.delete') . ' ' . strtolower(__('words.user')) . '?',
])

<div
    {{ $attributes->only(['class'])->merge(['class' => 'flex flex-wrap items-center justify-center']) }}>

    {{-- default actions --}}
    <x-admin.buttons.clickable
        prepend-icon="eye-fill"
        variant="primary"
        sm link no-transform />

    <x-admin.buttons.clickable
        prepend-icon="pencil-fill"
        variant="info"
        sm link no-transform />

    <x-admin.buttons.confirmation
        wireConfirmAction="{{ $wireActionDelete }}"
        confirmText="{{ $deleteConfirmText }}"
        location="right"
        sm>
        <x-admin.buttons.clickable
            prepend-icon="trash3-fill"
            variant="danger"
            sm link no-transform />
    </x-admin.buttons.confirmation>

</div>
