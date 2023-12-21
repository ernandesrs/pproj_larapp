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
            [
                'text' => 'Payment',
                'icon' => 'credit-card-fill',
                'active' => false,
            ],
        ]">

            <x-slot name="content1">
                SLOT #1
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, voluptates.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore cum ratione sint unde
                    nam, distinctio fugiat aperiam tempora esse odit vitae soluta excepturi, et eum nobis quaerat iste
                    voluptatem.
                </p>
            </x-slot>

            <x-slot name="content2">
                SLOT #2
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, voluptates.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore cum ratione sint unde
                    nam, distinctio fugiat aperiam tempora esse odit vitae soluta excepturi, et eum nobis quaerat iste
                    voluptatem.
                </p>
            </x-slot>

            <x-slot name="content3">
                SLOT #3
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, voluptates.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore cum ratione sint unde
                    nam, distinctio fugiat aperiam tempora esse odit vitae soluta excepturi, et eum nobis quaerat iste
                    voluptatem.
                </p>
            </x-slot>

        </x-common.tab>

    </x-slot>
</x-admin.page>
