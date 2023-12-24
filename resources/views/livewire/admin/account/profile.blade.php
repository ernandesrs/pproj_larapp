<x-admin.page
    title="{{ __('phrases.my_profile') }}" subtitle="{{ __('phrases.manage_profile_data') }}"
    icon="person-circle"
    :breadcrumbs="[
        [
            'text' => __('words.profile'),
            'href' => route('admin.profile'),
        ],
    ]">
    <x-slot name="content">

        <x-common.tab :tabs="[
            [
                'text' => __('phrases.basic_data'),
                'icon' => 'person-lines-fill',
                'active' => true,
            ],
            [
                'text' => __('words.security'),
                'icon' => 'key-fill',
                'active' => false,
            ],
        ]">

            <x-slot name="content1">
                <x-admin.section title="{{ __('phrases.profile_picture') }}"
                    subtitle="{{ __('phrases.update_profile_picture') }}" no-shadow no-border>
                    <x-slot name="content">

                        <div class="flex flex-wrap items-center">
                            <x-common.thumb size="extralarge"
                                image="{{ \Auth::user()->photo ? \Storage::url(\Auth::user()->photo) : '' }}"
                                alternative-text="{{ \Auth::user()->first_name }}" />

                            <div class="mt-6 sm:mt-0 ml-4">
                                <livewire:admin.account.photo />
                            </div>
                        </div>

                    </x-slot>
                </x-admin.section>

                <x-admin.section title="{{ __('phrases.basic_data') }}" subtitle="{{ __('phrases.update_basic_data') }}"
                    no-shadow no-border>
                    <x-slot name="content">

                        <livewire:admin.account.basic-data />

                    </x-slot>
                </x-admin.section>
            </x-slot>

            <x-slot name="content2">
                <x-admin.section title="{{ __('phrases.security_data') }}"
                    subtitle="{{ __('phrases.update_security_data') }}" no-shadow>
                    <x-slot name="content">

                        <livewire:admin.account.password />

                    </x-slot>
                </x-admin.section>
            </x-slot>

        </x-common.tab>

    </x-slot>
</x-admin.page>
