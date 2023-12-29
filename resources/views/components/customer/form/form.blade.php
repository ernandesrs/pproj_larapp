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
        <x-customer.buttons.btn wire:loading.remove type="submit" prepend-icon="check-lg" text="{{ $submitText }}"
            variant="primary"
            no-transform />
        <x-customer.buttons.btn wire:loading loading prepend-icon="check-lg" text="{{ $submittingText }}"
            variant="primary" no-transform />
    </div>

</form>
