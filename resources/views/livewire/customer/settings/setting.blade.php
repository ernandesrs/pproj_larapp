<x-customer.layout.page
    show-actions
    title="{{ __('words.settings') }}">

    <x-slot name="actions">
        <x-customer.buttons.btn
            prepend-icon="arrow-left"
            text="Action #1"
            variant="light"
            small
            flat
            class="rounded-tr-none rounded-br-none" />
        <x-customer.buttons.btn
            append-icon="arrow-right"
            text="Action #2"
            variant="light"
            small
            flat
            class="rounded-tl-none rounded-bl-none" />
    </x-slot>

</x-customer.layout.page>
