@props([
    'action' => null,
    'submitText' => __('words.submit'),
    'submittingText' => __('words.wait') . '...',
])

<form wire:submit="{{ $action }}">

    {{ $slot }}

    <div class="flex justify-center mt-4">
        <x-admin.buttons.clickable
            wire:target="{{ $action }}"
            wire:loading.remove
            as="button"
            type="submit"
            prepend-icon="check-lg"
            text="{{ $submitText }}"
            variant="primary" />

        <x-admin.buttons.clickable
            wire:target="{{ $action }}"
            wire:loading
            wire:loading.class="animate-pulse"
            as="button"
            type="submit"
            prepend-icon="check-lg"
            text="{{ $submittingText }}"
            variant="primary" />
    </div>

</form>
