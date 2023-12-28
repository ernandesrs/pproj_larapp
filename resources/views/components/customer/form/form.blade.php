@props([
    'action' => null,

    'submitText' => __('words.submit'),
])

<form wire:submit="{{ $action }}">

    <div>
        {{ $slot }}
    </div>

    <div class="mt-8 flex justify-center">
        <x-customer.buttons.btn type="submit" prepend-icon="check-lg" text="{{ $submitText }}" variant="primary"
            no-transform />
    </div>

</form>
