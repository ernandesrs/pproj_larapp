<x-customer.partials.page
    title="{{ __('phrases.my_account') }}">

    <x-common.tab
        :tabs="[
            [
                'text' => __('phrases.basic_data'),
                'icon' => 'person-fill',
                'active' => true,
            ],
            [
                'text' => __('phrases.security_data'),
                'icon' => 'lock-fill',
                'active' => false,
            ],
            [
                'text' => __('words.payments'),
                'icon' => 'credit-card-fill',
                'active' => false,
            ],
        ]">

        {{-- tab #1 --}}
        <x-slot name="content1">

            <livewire:customer.account.basic-data />

        </x-slot>

        {{-- tab #2 --}}
        <x-slot name="content2"></x-slot>

        {{-- tab #3 --}}
        <x-slot name="content3"></x-slot>

    </x-common.tab>

</x-customer.partials.page>
