<x-admin.page title="Others" subtitle="Others many components" icon="pie-chart-fill" :breadcrumbs="[['text' => 'Others', 'href' => '#']]">

    @slot('content')
        <div class="flex flex-wrap justify-center gap-y-10">
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

                        <div class="basis-full">
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
                    </div>

                @endslot
            </x-admin.section>
        </div>
    @endslot

</x-admin.page>
