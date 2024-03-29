<x-admin.layout.page>

    <div class="grid grid-cols-12 gap-6">

        <x-admin.section
            class="col-span-12"
            no-container>
            <div class="grid grid-cols-12 gap-6">

                <x-admin.cards.simple-info-card
                    variant="dark"
                    icon="people"
                    title="{{ __('words.users') }}"
                    class="col-span-12 sm:col-span-6 xl:col-span-4">

                    <div class="flex flex-wrap gap-1 text-white">
                        <a wire:navigate href="{{ route('admin.users') }}">
                            <x-admin.badge
                                variant="dark"
                                sm
                                text="Total: {{ \App\Models\User::all()->count() }}" />
                        </a>

                        <x-admin.badge
                            variant="dark"
                            sm
                            text="Adms: {{ \App\Models\User::permission(\App\Enums\Admin\UserPermissionsEnum::ADMIN_ACCESS)->count() }}" />
                    </div>

                </x-admin.cards.simple-info-card>

                <x-admin.cards.simple-info-card
                    variant="primary"
                    icon="lock"
                    title="{{ __('words.roles') }}"
                    class="col-span-12 sm:col-span-6 xl:col-span-4">

                    <div class="flex flex-wrap gap-1 text-white">
                        <a wire:navigate href="{{ route('admin.roles') }}">
                            <x-admin.badge
                                variant="primary"
                                sm
                                text="Total: {{ \Spatie\Permission\Models\Role::all()->count() }}" />
                        </a>
                    </div>

                </x-admin.cards.simple-info-card>

                <x-admin.cards.simple-info-card
                    variant="info"
                    icon="grid"
                    title="{{ __('words.examples') }}"
                    class="col-span-12 xl:col-span-4">

                    <div class="flex flex-wrap gap-1 text-white">
                        <x-admin.badge
                            variant="info"
                            sm
                            text="Lorem dolor" />
                        <x-admin.badge
                            variant="info"
                            outlined
                            sm
                            text="Sit natus" />
                    </div>

                </x-admin.cards.simple-info-card>
            </div>
        </x-admin.section>

        <x-admin.section
            class="col-span-12 sm:col-span-6 md:col-span-3">
            <livewire:admin.home.charts.users />
        </x-admin.section>

        <x-admin.section
            class="col-span-12 sm:col-span-6 md:col-span-3">
            <livewire:admin.home.charts.doughnut />
        </x-admin.section>

        <x-admin.section
            class="col-span-12 md:col-span-6">
            <livewire:admin.home.charts.line />
        </x-admin.section>

        <x-admin.section
            title="Lorem dolor"
            subtitle="Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio ducimus tempore corrupti!"
            class="col-span-12">

            <x-admin.list.table
                :columns="[
                    [
                        'label' => 'Lorem 1',
                    ],
                    [
                        'label' => 'Sits natus',
                    ],
                    [
                        'label' => 'Actions',
                    ],
                ]">

                @for ($i = 0; $i < 3; $i++)
                    <x-admin.list.table.row>
                        <x-admin.list.table.col class="font-medium">
                            Lorem dolor
                        </x-admin.list.table.col>
                        <x-admin.list.table.col>
                            Lorem dolor
                        </x-admin.list.table.col>
                        <x-admin.list.table.col>
                            <x-admin.list.actions>
                                <x-slot name="appendActions">
                                    <x-admin.buttons.clickable
                                        append-icon="arrow-right"
                                        text="Lorem sit"
                                        variant="primary"
                                        xs
                                        no-transform />
                                </x-slot>
                            </x-admin.list.actions>
                        </x-admin.list.table.col>
                    </x-admin.list.table.row>
                @endfor

            </x-admin.list.table>

        </x-admin.section>

    </div>

</x-admin.layout.page>
