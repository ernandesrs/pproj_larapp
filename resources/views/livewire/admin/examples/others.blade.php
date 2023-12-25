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
                                    <x-common.button text="Custom actions" />
                                @endslot
                            </x-common.dialog>
                            <x-common.dialog-activator controls="dialog1">
                                <x-slot name="activator">
                                    <x-common.button text="Show dialog #1" />
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
                                    <x-common.button text="Custom actions" />
                                @endslot
                            </x-common.dialog>
                            <x-common.dialog-activator controls="dialog2">
                                <x-slot name="activator">
                                    <x-common.button text="Show medium dialog #2" />
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
                                    <x-common.button text="Custom actions" />
                                @endslot
                            </x-common.dialog>
                            <x-common.dialog-activator controls="dialog3">
                                <x-slot name="activator">
                                    <x-common.button text="Show large dialog #3" />
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
                                    <x-common.button text="Custom actions" />
                                @endslot
                            </x-common.dialog>
                            <x-common.dialog-activator controls="dialog4">
                                <x-slot name="activator">
                                    <x-common.button text="Show full dialog #4" />
                                </x-slot>
                            </x-common.dialog-activator>

                            {{-- dialog 5 --}}
                            <x-common.dialog id="dialog5" />
                            <x-common.dialog-activator
                                controls="dialog5"
                                data-info="{{ json_encode([
                                    'icon' => 'rocket-takeoff-fill',
                                    'title' => 'Title received via activator',
                                    'text' =>
                                        'This text was received via the data-info property through the dialog activator. This is ideal when you want to use the same dialog to display dynamic content, such as messages, simply inserting a JSON with the icon, title and text fields in the data-info property.',
                                ]) }}">
                                <x-slot name="activator">
                                    <x-common.button text="Dialog with data from activator" />
                                </x-slot>
                            </x-common.dialog-activator>

                            {{-- dialog 6 --}}
                            <x-common.dialog id="dialog6" persistent />
                            <x-common.dialog-activator
                                controls="dialog6"
                                data-info="{{ json_encode([
                                    'icon' => 'rocket-takeoff-fill',
                                    'title' => 'This is a persistent dialog',
                                    'text' =>
                                        'This is a good example of a persistent dialog. Click on the bottom of the modal and see that it does not close, this is a persistent dialog.',
                                ]) }}">
                                <x-slot name="activator">
                                    <x-common.button text="Dialog persistent" />
                                </x-slot>
                            </x-common.dialog-activator>
                        </div>

                    </div>
                @endslot
            </x-admin.section>

            <x-admin.section title="Thumbnail" subtitle="Thumbnail examples">
                <x-slot name="content">
                    <div class="flex flex-wrap justify-center gap-10 mb-8">
                        <div class="flex flex-col justify-center items-center">
                            <div class="py-2 font-semibold text-gray-500">
                                Avatar text
                            </div>
                            <x-common.thumb alternative-text='Avatar' />
                        </div>

                        <div class="flex flex-col justify-center items-center">
                            <div class="py-2 font-semibold text-gray-500">
                                Avatar photo
                            </div>
                            <x-common.thumb image="{{ asset('assets/img/tree-square.jpg') }}" alternative-text='Avatar' />
                        </div>

                        <div class="flex flex-col justify-center items-center">
                            <div class="py-2 font-semibold text-gray-500">
                                Square text
                            </div>
                            <x-common.thumb alternative-text='Cover' type="square" />
                        </div>

                        <div class="flex flex-col justify-center items-center">
                            <div class="py-2 font-semibold text-gray-500">
                                Square
                            </div>
                            <x-common.thumb image="{{ asset('assets/img/tree-square.jpg') }}" alternative-text='Cover'
                                type="square" />
                        </div>

                        <div class="flex flex-col justify-center items-center">
                            <div class="py-2 font-semibold text-gray-500">
                                Cover text
                            </div>
                            <x-common.thumb alternative-text='Cover' type="cover" />
                        </div>

                        <div class="flex flex-col justify-center items-center">
                            <div class="py-2 font-semibold text-gray-500">
                                Cover
                            </div>
                            <x-common.thumb image="{{ asset('assets/img/tree-rectangle.jpg') }}" alternative-text='Cover'
                                type="cover" />
                        </div>
                    </div>

                    <div class="flex flex-wrap justify-center gap-10 mb-8">
                        <div class="flex flex-col justify-center items-center">
                            <div class="py-2 font-semibold text-gray-500">
                                Avatar small
                            </div>
                            <x-common.thumb alternative-text='Avatar' size="small" />
                        </div>

                        <div class="flex flex-col justify-center items-center">
                            <div class="py-2 font-semibold text-gray-500">
                                Avatar large
                            </div>
                            <x-common.thumb alternative-text='Avatar' size="large" />
                        </div>

                        <div class="flex flex-col justify-center items-center">
                            <div class="py-2 font-semibold text-gray-500">
                                Avatar extralarge
                            </div>
                            <x-common.thumb alternative-text='Avatar' size="extralarge" />
                        </div>
                    </div>

                    <div class="flex flex-wrap justify-center gap-10 mb-8">
                        <div class="flex flex-col justify-center items-center">
                            <div class="py-2 font-semibold text-gray-500">
                                Square small
                            </div>
                            <x-common.thumb alternative-text='Square' type="square" size="small" />
                        </div>

                        <div class="flex flex-col justify-center items-center">
                            <div class="py-2 font-semibold text-gray-500">
                                Square large
                            </div>
                            <x-common.thumb alternative-text='Square' type="square" size="large" />
                        </div>

                        <div class="flex flex-col justify-center items-center">
                            <div class="py-2 font-semibold text-gray-500">
                                Square extralarge
                            </div>
                            <x-common.thumb alternative-text='Square' type="square" size="extralarge" />
                        </div>
                    </div>

                    <div class="flex flex-wrap justify-center gap-10 mb-8">
                        <div class="flex flex-col justify-center items-center">
                            <div class="py-2 font-semibold text-gray-500">
                                Cover small
                            </div>
                            <x-common.thumb alternative-text='Cover' type="cover" size="small" />
                        </div>

                        <div class="flex flex-col justify-center items-center">
                            <div class="py-2 font-semibold text-gray-500">
                                Cover large
                            </div>
                            <x-common.thumb alternative-text='Cover' type="cover" size="large" />
                        </div>

                        <div class="flex flex-col justify-center items-center">
                            <div class="py-2 font-semibold text-gray-500">
                                Cover extralarge
                            </div>
                            <x-common.thumb alternative-text='Cover' type="cover" size="extralarge" />
                        </div>
                    </div>
                </x-slot>
            </x-admin.section>

            <x-admin.section title="Dropdown" subtitle="Dropdown examples">
                @slot('content')
                    <div class="flex flex-wrap justify-center">
                        <div class="basis-full sm:basis-6/12">
                            <x-admin.section title="Left dropdown" subtitle="Left dropdown" no-shadow no-border>
                                @slot('content')
                                    <x-common.dropdown text="Actions" location="left">
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
                                    </x-common.dropdown>
                                @endslot
                            </x-admin.section>
                        </div>

                        <div class="basis-full sm:basis-6/12">
                            <x-admin.section title="Right dropdown" subtitle="Right dropdown" no-shadow no-border>
                                @slot('content')
                                    <div class="flex justify-end">
                                        <x-common.dropdown text="Actions" location="right">
                                            @slot('content')
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi voluptates veniam
                                                    voluptatum
                                                    optio
                                                    odio laborum possimus tempore aliquam, velit repellat, excepturi, facere
                                                    accusantium.
                                                    Possimus
                                                    fugiat expedita, laboriosam placeat ipsum et?</p>
                                            @endslot
                                        </x-common.dropdown>
                                    </div>
                                @endslot
                            </x-admin.section>
                        </div>

                        <div class="basis-full sm:basis-6/12 md:basis-4/12">
                            <x-admin.section title="Only icon" subtitle="Only icon" no-shadow no-border>
                                @slot('content')
                                    <div class="flex justify-start">
                                        <x-common.dropdown location="left">
                                            @slot('content')
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi voluptates veniam
                                                    voluptatum
                                                    optio
                                                    odio laborum possimus tempore aliquam, velit repellat, excepturi, facere
                                                    accusantium.
                                                    Possimus
                                                    fugiat expedita, laboriosam placeat ipsum et?</p>
                                            @endslot
                                        </x-common.dropdown>
                                    </div>
                                @endslot
                            </x-admin.section>
                        </div>

                        <div class="basis-full sm:basis-6/12 md:basis-4/12">
                            <x-admin.section title="Button link variant" subtitle="Button link variant" no-shadow no-border>
                                @slot('content')
                                    <div class="flex justify-start">
                                        <x-common.dropdown location="left" text="Actions" variant="primary-link">
                                            @slot('content')
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi voluptates veniam
                                                    voluptatum
                                                    optio
                                                    odio laborum possimus tempore aliquam, velit repellat, excepturi, facere
                                                    accusantium.
                                                    Possimus
                                                    fugiat expedita, laboriosam placeat ipsum et?</p>
                                            @endslot
                                        </x-common.dropdown>
                                    </div>
                                @endslot
                            </x-admin.section>
                        </div>

                        <div class="basis-full sm:basis-6/12 md:basis-4/12">
                            <x-admin.section title="Button variant" subtitle="Button secondary outlined variant" no-shadow
                                no-border>
                                @slot('content')
                                    <div class="flex justify-start">
                                        <x-common.dropdown location="left" text="Actions" variant="secondary-outlined">
                                            @slot('content')
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi voluptates veniam
                                                    voluptatum
                                                    optio
                                                    odio laborum possimus tempore aliquam, velit repellat, excepturi, facere
                                                    accusantium.
                                                    Possimus
                                                    fugiat expedita, laboriosam placeat ipsum et?</p>
                                            @endslot
                                        </x-common.dropdown>
                                    </div>
                                @endslot
                            </x-admin.section>
                        </div>

                        <div class="basis-full sm:basis-6/12">
                            <x-admin.section title="Button sizes" subtitle="Button small and large" no-shadow no-border>
                                @slot('content')
                                    <div class="flex justify-between">
                                        <x-common.dropdown location="left" text="Actions" variant="primary" small>
                                            @slot('content')
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi voluptates veniam
                                                    voluptatum
                                                    optio
                                                    odio laborum possimus tempore aliquam, velit repellat, excepturi, facere
                                                    accusantium.
                                                    Possimus
                                                    fugiat expedita, laboriosam placeat ipsum et?</p>
                                            @endslot
                                        </x-common.dropdown>

                                        <x-common.dropdown location="right" text="Actions" variant="primary" large>
                                            @slot('content')
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi voluptates veniam
                                                    voluptatum
                                                    optio
                                                    odio laborum possimus tempore aliquam, velit repellat, excepturi, facere
                                                    accusantium.
                                                    Possimus
                                                    fugiat expedita, laboriosam placeat ipsum et?</p>
                                            @endslot
                                        </x-common.dropdown>
                                    </div>
                                @endslot
                            </x-admin.section>
                        </div>

                        <div class="basis-full sm:basis-6/12">
                            <x-admin.section title="Custom button" subtitle="Using a custom button to dropdown toggle"
                                no-shadow no-border>
                                @slot('content')
                                    <div class="flex justify-between">
                                        <x-common.dropdown location="left">
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
                                        </x-common.dropdown>
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
