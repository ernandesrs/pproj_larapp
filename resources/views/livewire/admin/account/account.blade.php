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
                title="{{ __('words.profile') }} {{ __('words.photo') }}"
                subtitle="{{ __('phrases.update_profile_picture') }}"
                class="my-6">



            </x-admin.section>

            <x-admin.section
                title="{{ __('phrases.basic_data') }}"
                subtitle="{{ __('phrases.update_basic_data') }}">



            </x-admin.section>

        </x-slot>

        {{-- security data --}}
        <x-slot name="content2">

            <x-admin.section>
            </x-admin.section>

        </x-slot>

    </x-common.tab>

</x-admin.layout.page>
