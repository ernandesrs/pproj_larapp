@props([])

<x-customer.cards.card class="bg-gradient-to-b from-customer-secondary-normal to-customer-primary-dark-2">
    <div class="flex flex-col items-center text-center xl:px-28">
        <div class="px-6 py-3 bg-customer-danger-dark-2 rounded-xl font-semibold text-customer-white mb-4 animate-pulse">
            Expires in 00:30:00 minutes
        </div>

        <x-customer.h1 text="75% OFF! Get Your Annual Premium Package Now"
            class="xl:text-5xl text-customer-white" />

        <div class="mt-5">
            <x-customer.buttons.btn text="I Want My Premium Package!" append-icon="arrow-right" variant="secondary" />
        </div>
    </div>
</x-customer.cards.card>
