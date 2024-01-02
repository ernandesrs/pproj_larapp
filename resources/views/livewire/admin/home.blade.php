<x-admin.layout.page>

    <div class="grid grid-cols-12 gap-6">

        <x-admin.section
            class="col-span-12">
            <div class="grid grid-cols-12 gap-6">

                <x-admin.cards.card
                    variant="dark"
                    icon="people"
                    title="{{ __('words.users') }}"
                    class="col-span-12 sm:col-span-6 xl:col-span-4">

                    <div class="flex flex-wrap gap-1 text-white">
                        <a wire:navigate href="{{ route('admin.users') }}">
                            <span class="inline-block px-3 py-1 bg-admin-dark-normal text-xs rounded-sm">
                                Total: {{ \App\Models\User::all()->count() }}
                            </span>
                        </a>

                        <span class="inline-block px-3 py-1 bg-admin-dark-normal text-xs rounded-sm">
                            Adms: {{ \App\Models\User::permission(\App\Enums\PermissionsEnum::ADMIN_ACCESS)->count() }}
                        </span>
                    </div>

                </x-admin.cards.card>

                <x-admin.cards.card
                    variant="primary"
                    icon="lock"
                    title="{{ __('words.roles') }}"
                    class="col-span-12 xl:col-span-4">

                    <div class="flex flex-wrap gap-1 text-white">
                        <a wire:navigate href="{{ route('admin.roles') }}">
                            <span class="inline-block px-3 py-1 bg-admin-primary-normal text-xs rounded-sm">
                                Total: {{ \Spatie\Permission\Models\Role::all()->count() }}
                            </span>
                        </a>
                    </div>

                </x-admin.cards.card>

                <x-admin.cards.card
                    variant="info"
                    icon="grid"
                    title="{{ __('words.examples') }}"
                    class="col-span-12 sm:col-span-6 xl:col-span-4">

                    <div class="flex flex-wrap gap-1 text-white">
                        <span class="inline-block px-3 py-1 bg-admin-info-normal text-xs rounded-sm">
                            Lorem dolor
                        </span>
                        <span class="inline-block px-3 py-1 bg-admin-info-normal text-xs rounded-sm">
                            Sit natus
                        </span>
                    </div>

                </x-admin.cards.card>
            </div>
        </x-admin.section>

        <x-admin.section
            class="col-span-12 md:col-span-5 lg:col-span-4">
        </x-admin.section>

        <x-admin.section
            class="col-span-12 md:col-span-7 lg:col-span-8">
        </x-admin.section>

    </div>

</x-admin.layout.page>
