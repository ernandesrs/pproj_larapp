<x-admin.layout.page
    icon="person-fill"
    title="{{ __('phrases.my_account') }}">

    <x-common.tab
        borderless
        :tabs="[
            [
                'icon' => 'person-fill',
                'text' => __('phrases.basic_data'),
            ],
            [
                'icon' => 'lock-fill',
                'text' => __('phrases.security_data'),
            ],
        ]">

        {{-- basic data --}}
        <x-slot name="content1">

            <x-admin.section
                title="{{ __('phrases.basic_data') }}"
                subtitle="{{ __('phrases.update_basic_data') }}">

                <livewire:admin.account.basic-data />

            </x-admin.section>

        </x-slot>

        {{-- security data --}}
        <x-slot name="content2">

            <x-admin.section
                title="{{ __('words.security') }}"
                subtitle="{{ __('phrases.update_security_data') }}">

                <livewire:admin.account.password />

            </x-admin.section>

        </x-slot>

    </x-common.tab>

</x-admin.layout.page>
