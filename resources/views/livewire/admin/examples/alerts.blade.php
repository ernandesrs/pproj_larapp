<x-admin.page icon='pie-chart-fill' title="Alerts" subtitle="See all alerts examples" :breadcrumbs="[['text' => 'Alerts', 'href' => route('admin.examples.alerts')]]">
    @slot('content')
        <div class="flex flex-wrap gap-y-10">
            <div class="basis-full sm:basis-6/12 sm:pr-2">
                <x-admin.section title="Alert example"
                    subtitle="This is a example of a default alert of type success, with title and text">
                    @slot('content')
                        <x-admin.alert type="success" title="Lorem consectetur adipisicing"
                            text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus esse excepturi porro delectus dicta!" />
                    @endslot
                </x-admin.section>
            </div>

            <div class="basis-full sm:basis-6/12 sm:pl-2">
                <x-admin.section title="Alert example"
                    subtitle="This is a example of a default alert of type danger, with title, text and close button">
                    @slot('content')
                        <x-admin.alert type="danger" title="Lorem consectetur adipisicing"
                            text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus esse excepturi porro delectus dicta!"
                            closable />
                    @endslot
                </x-admin.section>
            </div>
        </div>
    @endslot
</x-admin.page>
