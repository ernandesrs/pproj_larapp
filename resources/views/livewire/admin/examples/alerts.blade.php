<x-admin.page icon='pie-chart-fill' title="Alerts" subtitle="See all alerts examples" :breadcrumbs="[['text' => 'Alerts', 'href' => route('admin.examples.alerts')]]">
    @slot('content')
        <div class="flex flex-wrap gap-y-10">
            <div class="basis-full">
                <x-admin.section title="Alerts example" subtitle="This is a example of a alert with title and text">
                    @slot('content')
                        <div class="flex flex-wrap gap-6">
                            <div class="basis-full my-4">
                                <label for="alert_type">Alert type</label>
                                <select class="py-2 px-6 border ml-2" wire:model.blur="type" id="alert_type">
                                    <option value="default">Default</option>
                                    <option value="success">Success</option>
                                    <option value="info">Info</option>
                                    <option value="danger">Danger</option>
                                </select>
                            </div>

                            <div class="basis-full flex flex-wrap items-center gap-4">
                                <x-common.button wire:click="showAlert" text="Show alert" />
                                <x-common.button wire:click="showFloatAlert" text="Show float alert"
                                    variant="primary-outlined" />
                                <x-common.button wire:click="showSessionAlert" text="Show session alert" />
                                <x-common.button wire:click="showFloatSessionAlert" text="Show float session alert"
                                    variant="primary-outlined" />
                            </div>
                        </div>
                    @endslot
                </x-admin.section>
            </div>
        </div>
    @endslot
</x-admin.page>
