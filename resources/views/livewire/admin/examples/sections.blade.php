<x-admin.page icon='pie-chart-fill' title="Sections" subtitle="See several sample sections" :breadcrumbs="[['text' => 'Sections', 'href' => route('admin.examples.sections')]]"
    :action-create="['text' => 'New section', 'href' => '#']">

    @slot('actions')
        <x-admin.button text="Custom action" />
    @endslot

    @slot('content')
        <div class="flex flex-wrap gap-y-8">

            <div class="basis-full sm:basis-6/12 pr-4">
                <x-admin.section title="Section component" subtitle="Default section component">
                    @slot('content')
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque, reiciendis consequatur ad
                            consectetur
                            sequi dolores nihil possimus aliquid ut consequuntur earum dolorum ipsa, pariatur aperiam labore
                            doloribus iusto aut voluptas.</p>
                    @endslot
                </x-admin.section>
            </div>

            <div class="basis-full sm:basis-6/12 pl-4">
                <x-admin.section header-icon='pie-chart' title="Section component"
                    subtitle="Section component with header icon">
                    @slot('content')
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque, reiciendis consequatur ad
                            consectetur
                            sequi dolores nihil possimus aliquid ut consequuntur earum dolorum ipsa, pariatur aperiam labore
                            doloribus iusto aut voluptas.</p>
                    @endslot
                </x-admin.section>
            </div>

            <div class="basis-full sm:basis-6/12 pr-4">
                <x-admin.section title="Section component" subtitle="Section component without shadow" no-shadow>
                    @slot('content')
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque, reiciendis consequatur ad
                            consectetur
                            sequi dolores nihil possimus aliquid ut consequuntur earum dolorum ipsa, pariatur aperiam labore
                            doloribus iusto aut voluptas.</p>
                    @endslot
                </x-admin.section>
            </div>

            <div class="basis-full sm:basis-6/12 pl-4">
                <x-admin.section title="Section component" subtitle="Section component without shadow and border" no-shadow
                    no-border>
                    @slot('content')
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque, reiciendis consequatur ad
                            consectetur
                            sequi dolores nihil possimus aliquid ut consequuntur earum dolorum ipsa, pariatur aperiam labore
                            doloribus iusto aut voluptas.</p>
                    @endslot
                </x-admin.section>
            </div>

            <div class="basis-full">
                <x-admin.section title="Section component" subtitle="Section component with action buttons">
                    @slot('content')
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque, reiciendis consequatur ad
                            consectetur
                            sequi dolores nihil possimus aliquid ut consequuntur earum dolorum ipsa, pariatur aperiam labore
                            doloribus iusto aut voluptas.</p>
                    @endslot
                    @slot('actions')
                        <x-admin.button as="link" text="Button action" variant="primary-link" append-icon="arrow-right"
                            href="#" />
                    @endslot
                </x-admin.section>
            </div>

        </div>
    @endslot

</x-admin.page>
