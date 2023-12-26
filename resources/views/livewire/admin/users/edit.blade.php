<x-admin.page
    title="{{ $title }}"
    :breadcrumbs="[
        [
            'text' => __('words.users'),
            'href' => route('admin.users'),
        ],
        [
            'text' => __('words.edit'),
            'href' => route('admin.users.edit', ['user' => $user->id]),
        ],
    ]">
    <x-slot name="content">

        <div class="flex flex-wrap items-start gap-y-6">

            <div class="basis-full md:basis-7/12 lg:basis-8/12">

                <x-admin.section title="{{ __('phrases.basic_data') }}">
                    <x-slot name="content">
                        <x-common.form.form wire:submit="update"
                            submit-text="{{ __('words.update') }} {{ __('words.user') }}">
                            <x-slot name="content">
                                <x-common.view-partials.user-basic-data />
                            </x-slot>
                        </x-common.form.form>
                    </x-slot>
                </x-admin.section>

                <div class="py-4"></div>

                <x-admin.section title="{{ __('phrases.security_data') }}">
                    <x-slot name="content">
                        <x-common.form.form wire:submit="updatePassword"
                            submit-text="{{ __('words.update') }} {{ __('words.password') }}">
                            <x-slot name="content">
                                <x-common.view-partials.user-password />
                            </x-slot>
                        </x-common.form.form>
                    </x-slot>
                </x-admin.section>

            </div>

            <div class="basis-full md:basis-5/12 lg:basis-4/12">

            </div>
        </div>

    </x-slot>
</x-admin.page>
