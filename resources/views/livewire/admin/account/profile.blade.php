<x-admin.page title="My profile" subtitle="Manage your profile data" icon="person-circle">
    <x-slot name="content">

        <x-common.tab :tabs="[
            [
                'text' => 'Basic data',
                'icon' => 'person-lines-fill',
                'active' => true,
            ],
            [
                'text' => 'Security',
                'icon' => 'key-fill',
                'active' => false,
            ],
        ]">

            <x-slot name="content1">
                <x-admin.section title="Your profile photo" subtitle="Update or delete your profile photo" no-shadow
                    no-border>
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

                <x-admin.section title="Your basic data" subtitle="Check and update your basic profile data" no-shadow
                    no-border>
                    <x-slot name="content">

                        <livewire:admin.account.basic-data />

                    </x-slot>
                </x-admin.section>
            </x-slot>

            <x-slot name="content2">
                <x-admin.section title="Your security data" subtitle="Check and update your security data" no-shadow>
                    <x-slot name="content">

                        <livewire:admin.account.password />

                    </x-slot>
                </x-admin.section>
            </x-slot>

        </x-common.tab>

    </x-slot>
</x-admin.page>
