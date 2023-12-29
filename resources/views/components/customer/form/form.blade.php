@props([
    'action' => null,

    'submitText' => __('words.submit'),
    'submittingText' => __('words.wait'),
])

<form wire:submit="{{ $action }}">

    <div>
        {{ $slot }}
    </div>

    <div class="mt-8 flex justify-center">
        <x-customer.buttons.btn
            type="submit"
            wire:target="{{ $action }}"
            wire:loading.class="loading"

            prepend-icon="check-lg"
            text="{{ $submitText }}"
            variant="primary"
            no-transform />
    </div>

</form>
