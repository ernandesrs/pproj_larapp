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

            <div class="grid grid-cols-12 gap-8 pt-10">
                <div class="col-span-12 lg:col-span-4">
                    <livewire:customer.account.picture />
                </div>

                <div class="col-span-12 lg:col-span-8">
                    <livewire:customer.account.basic-data />
                </div>
            </div>

        </x-slot>

        {{-- tab #2 --}}
        <x-slot name="content2">

            <div class="pt-10">
                <livewire:customer.account.password />
            </div>

        </x-slot>

        {{-- tab #3 --}}
        <x-slot name="content3"></x-slot>

    </x-common.tab>

</x-customer.partials.page>
