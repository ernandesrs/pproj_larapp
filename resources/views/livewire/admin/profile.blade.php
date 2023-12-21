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
                SLOT #1
            </x-slot>

            <x-slot name="content2">
                SLOT #2
            </x-slot>

        </x-common.tab>

    </x-slot>
</x-admin.page>
