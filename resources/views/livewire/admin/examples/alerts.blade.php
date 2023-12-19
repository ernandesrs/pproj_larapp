<x-admin.page icon='pie-chart-fill' title="Alerts" subtitle="See all alerts examples" :breadcrumbs="[['text' => 'Alerts', 'href' => route('admin.examples.alerts')]]">
    @slot('content')
        <div class="flex flex-wrap gap-y-10">
            <div class="basis-full">
                <x-admin.section title="Alerts example" subtitle="This is a example of a alert with title and text">
                    @slot('content')
                        <div class="flex flex-wrap gap-6">
                            <div class="w-full border p-6">
                                <div class="text-lg font-semibold mb-3">From session</div>
                                @dump(session('alert'))
                                <div class="text-lg font-semibold my-3">Local</div>
                                @dump($this->alert)
                            </div>

                            <x-admin.button wire:click="showAlert" text="Show alert" />
                            <x-admin.button wire:click="showSessionAlert" text="Show session alert" />

                            <x-admin.button wire:click="showFloatAlert" text="Show float alert" />
                            <x-admin.button wire:click="showFloatSessionAlert" text="Show float session alert" />

                        </div>
                    @endslot
                </x-admin.section>
            </div>
        </div>
    @endslot
</x-admin.page>
