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

            <div class="grid grid-cols-12 gap-6 py-6">

                <x-admin.section
                    class="col-span-12 xl:col-span-4"
                    title="{{ __('phrases.profile_picture') }}"
                    subtitle="{{ __('phrases.update_profile_picture') }}">
                    <livewire:admin.account.photo />
                </x-admin.section>

                <x-admin.section
                    class="col-span-12 xl:col-span-8"
                    title="{{ __('phrases.basic_data') }}"
                    subtitle="{{ __('phrases.update_basic_data') }}">
                    <livewire:admin.account.basic-data />
                </x-admin.section>

            </div>

        </x-slot>

        {{-- security data --}}
        <x-slot name="content2">

            <div class="py-6">

                <x-admin.section
                    title="{{ __('words.security') }}"
                    subtitle="{{ __('phrases.update_security_data') }}">

                    <livewire:admin.account.password />

                </x-admin.section>

            </div>

        </x-slot>

    </x-common.tab>

</x-admin.layout.page>
