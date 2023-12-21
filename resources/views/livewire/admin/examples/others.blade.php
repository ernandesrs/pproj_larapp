<x-admin.page title="Others" subtitle="Others many components" icon="pie-chart-fill" :breadcrumbs="[['text' => 'Others', 'href' => '#']]">

    @slot('content')
        <div class="flex flex-wrap justify-center gap-y-8">
            <x-admin.section title="Dialogs" subtitle="Dialogs examples">
                @slot('content')
                    <div class="flex flex-wrap justify-center">
                        <div class="flex flex-wrap gap-5">
                            {{-- dialog 1 --}}
                            <x-common.dialog id="dialog1" icon="app" title="Dialog #1 title">
                                @slot('content')
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam ea quo unde vel adipisci
                                        blanditiis voluptates eum. Nam, cum minima?
                                    </p>
                                @endslot
                                @slot('actions')
                                    <x-admin.button text="Custom actions" />
                                @endslot
                            </x-common.dialog>
                            <x-common.dialog-activator controls="dialog1">
                                <x-slot name="activator">
                                    <x-admin.button text="Show dialog #1" />
                                </x-slot>
                            </x-common.dialog-activator>

                            {{-- dialog 2 --}}
                            <x-common.dialog id="dialog2" icon="app" title="Medium dialog #2 title" medium>
                                @slot('content')
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam ea quo unde vel adipisci
                                        blanditiis voluptates eum. Nam, cum minima?
                                    </p>
                                @endslot
                                @slot('actions')
                                    <x-admin.button text="Custom actions" />
                                @endslot
                            </x-common.dialog>
                            <x-common.dialog-activator controls="dialog2">
                                <x-slot name="activator">
                                    <x-admin.button text="Show medium dialog #2" />
                                </x-slot>
                            </x-common.dialog-activator>

                            {{-- dialog 3 --}}
                            <x-common.dialog id="dialog3" icon="app" title="Large dialog #3 title" large>
                                @slot('content')
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam ea quo unde vel adipisci
                                        blanditiis voluptates eum. Nam, cum minima?
                                    </p>
                                @endslot
                                @slot('actions')
                                    <x-admin.button text="Custom actions" />
                                @endslot
                            </x-common.dialog>
                            <x-common.dialog-activator controls="dialog3">
                                <x-slot name="activator">
                                    <x-admin.button text="Show large dialog #3" />
                                </x-slot>
                            </x-common.dialog-activator>

                            {{-- dialog 4 --}}
                            <x-common.dialog id="dialog4" icon="app" title="Full dialog #4 title" full>
                                @slot('content')
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam ea quo unde vel adipisci
                                        blanditiis voluptates eum. Nam, cum minima?
                                    </p>
                                @endslot
                                @slot('actions')
                                    <x-admin.button text="Custom actions" />
                                @endslot
                            </x-common.dialog>
                            <x-common.dialog-activator controls="dialog4">
                                <x-slot name="activator">
                                    <x-admin.button text="Show full dialog #4" />
                                </x-slot>
                            </x-common.dialog-activator>
                        </div>

                    </div>
                @endslot
            </x-admin.section>

            <x-admin.section title="Dropdown" subtitle="Dropdown examples">
                @slot('content')
                    <div class="flex flex-wrap justify-center">
                        <div class="basis-full sm:basis-6/12">
                            <x-admin.section title="Left dropdown" subtitle="Left dropdown" no-shadow no-border>
                                @slot('content')
                                    <x-admin.dropdown text="Actions" location="left">
                                        @slot('content')
                                            <div class="flex justify-end">
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi voluptates veniam
                                                    voluptatum
                                                    optio
                                                    odio laborum possimus tempore aliquam, velit repellat, excepturi, facere
                                                    accusantium.
                                                    Possimus
                                                    fugiat expedita, laboriosam placeat ipsum et?</p>
                                            </div>
                                        @endslot
                                    </x-admin.dropdown>
                                @endslot
                            </x-admin.section>
                        </div>

                        <div class="basis-full sm:basis-6/12">
                            <x-admin.section title="Right dropdown" subtitle="Right dropdown" no-shadow no-border>
                                @slot('content')
                                    <div class="flex justify-end">
                                        <x-admin.dropdown text="Actions" location="right">
                                            @slot('content')
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi voluptates veniam
                                                    voluptatum
                                                    optio
                                                    odio laborum possimus tempore aliquam, velit repellat, excepturi, facere
                                                    accusantium.
                                                    Possimus
                                                    fugiat expedita, laboriosam placeat ipsum et?</p>
                                            @endslot
                                        </x-admin.dropdown>
                                    </div>
                                @endslot
                            </x-admin.section>
                        </div>

                        <div class="basis-full sm:basis-6/12 md:basis-4/12">
                            <x-admin.section title="Only icon" subtitle="Only icon" no-shadow no-border>
                                @slot('content')
                                    <div class="flex justify-start">
                                        <x-admin.dropdown location="left">
                                            @slot('content')
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi voluptates veniam
                                                    voluptatum
                                                    optio
                                                    odio laborum possimus tempore aliquam, velit repellat, excepturi, facere
                                                    accusantium.
                                                    Possimus
                                                    fugiat expedita, laboriosam placeat ipsum et?</p>
                                            @endslot
                                        </x-admin.dropdown>
                                    </div>
                                @endslot
                            </x-admin.section>
                        </div>

                        <div class="basis-full sm:basis-6/12 md:basis-4/12">
                            <x-admin.section title="Button link variant" subtitle="Button link variant" no-shadow no-border>
                                @slot('content')
                                    <div class="flex justify-start">
                                        <x-admin.dropdown location="left" text="Actions" variant="primary-link">
                                            @slot('content')
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi voluptates veniam
                                                    voluptatum
                                                    optio
                                                    odio laborum possimus tempore aliquam, velit repellat, excepturi, facere
                                                    accusantium.
                                                    Possimus
                                                    fugiat expedita, laboriosam placeat ipsum et?</p>
                                            @endslot
                                        </x-admin.dropdown>
                                    </div>
                                @endslot
                            </x-admin.section>
                        </div>

                        <div class="basis-full sm:basis-6/12 md:basis-4/12">
                            <x-admin.section title="Button variant" subtitle="Button secondary outlined variant" no-shadow
                                no-border>
                                @slot('content')
                                    <div class="flex justify-start">
                                        <x-admin.dropdown location="left" text="Actions" variant="secondary-outlined">
                                            @slot('content')
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi voluptates veniam
                                                    voluptatum
                                                    optio
                                                    odio laborum possimus tempore aliquam, velit repellat, excepturi, facere
                                                    accusantium.
                                                    Possimus
                                                    fugiat expedita, laboriosam placeat ipsum et?</p>
                                            @endslot
                                        </x-admin.dropdown>
                                    </div>
                                @endslot
                            </x-admin.section>
                        </div>

                        <div class="basis-full sm:basis-6/12">
                            <x-admin.section title="Button sizes" subtitle="Button small and large" no-shadow no-border>
                                @slot('content')
                                    <div class="flex justify-between">
                                        <x-admin.dropdown location="left" text="Actions" variant="primary" small>
                                            @slot('content')
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi voluptates veniam
                                                    voluptatum
                                                    optio
                                                    odio laborum possimus tempore aliquam, velit repellat, excepturi, facere
                                                    accusantium.
                                                    Possimus
                                                    fugiat expedita, laboriosam placeat ipsum et?</p>
                                            @endslot
                                        </x-admin.dropdown>

                                        <x-admin.dropdown location="right" text="Actions" variant="primary" large>
                                            @slot('content')
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi voluptates veniam
                                                    voluptatum
                                                    optio
                                                    odio laborum possimus tempore aliquam, velit repellat, excepturi, facere
                                                    accusantium.
                                                    Possimus
                                                    fugiat expedita, laboriosam placeat ipsum et?</p>
                                            @endslot
                                        </x-admin.dropdown>
                                    </div>
                                @endslot
                            </x-admin.section>
                        </div>

                        <div class="basis-full sm:basis-6/12">
                            <x-admin.section title="Custom button" subtitle="Using a custom button to dropdown toggle" no-shadow
                                no-border>
                                @slot('content')
                                    <div class="flex justify-between">
                                        <x-admin.dropdown location="left">
                                            @slot('content')
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi voluptates veniam
                                                    voluptatum
                                                    optio
                                                    odio laborum possimus tempore aliquam, velit repellat, excepturi, facere
                                                    accusantium.
                                                    Possimus
                                                    fugiat expedita, laboriosam placeat ipsum et?</p>
                                            @endslot
                                            @slot('toggler')
                                                <div
                                                    class="border-2 border-admin-primary-normal bg-admin-primary-normal text-white cursor-default rounded px-6 py-2">
                                                    CUSTOM DROPDOWN TOGGLER
                                                </div>
                                            @endslot
                                        </x-admin.dropdown>
                                    </div>
                                @endslot
                            </x-admin.section>
                        </div>

                        <div class="mb-96"></div>
                    </div>

                @endslot
            </x-admin.section>
        </div>
    @endslot

</x-admin.page>
