<x-admin.page title="My profile" subtitle="Manage your profile data" icon="person-circle">
    <x-slot name="content">

        <x-common.tab borderless :tabs="[
            [
                'text' => 'Basic data',
                'icon' => 'person-lines-fill',
                'active' => true,
            ],
            [
                'text' => 'Security',
                'icon' => 'key-fill',
                'active' => false,
            ],
            [
                'text' => 'Payment',
                'icon' => 'credit-card-fill',
                'active' => false,
            ],
            [
                'text' => 'Danger area',
                'icon' => 'exclamation-circle-fill',
                'active' => false,
            ],
        ]">

            <x-slot name="content1">
                <x-admin.section title="Your basic data" subtitle="Check and update your basic profile data" no-shadow>
                    <x-slot name="content">

                        <form wire:submit="update">
                            <div class="flex flex-wrap gap-y-5">
                                <div class="basis-full sm:basis-6/12 sm:pr-2">
                                    <x-common.form.input wire:model="data.first_name" label="First name"
                                        error="{{ $errors->first('data.first_name') }}" />
                                </div>

                                <div class="basis-full sm:basis-6/12 sm:pl-2">
                                    <x-common.form.input wire:model="data.last_name" label="Last name"
                                        error="{{ $errors->first('data.last_name') }}" />
                                </div>

                                <div class="basis-full sm:basis-6/12 sm:pr-2">
                                    <x-common.form.input wire:model="data.username" label="Username"
                                        error="{{ $errors->first('data.username') }}" />
                                </div>

                                <div class="basis-full sm:basis-6/12 sm:pl-2">
                                    <x-common.form.input wire:model="data.gender" label="Gender"
                                        error="{{ $errors->first('data.gender') }}" />
                                </div>

                                <div class="basis-full">
                                    <x-common.form.input wire:model="data.email" label="E-mail"
                                        error="{{ $errors->first('data.email') }}" disabled />
                                </div>

                                <div class="basis-full flex justify-center">
                                    <x-common.button type="submit" prepend-icon="check-lg" text="Update data" />
                                </div>
                            </div>
                        </form>

                    </x-slot>
                </x-admin.section>
            </x-slot>

            <x-slot name="content2">
                <x-admin.section title="Your security data" subtitle="Check and update your security data" no-shadow>
                    <x-slot name="content">
                    </x-slot>
                </x-admin.section>
            </x-slot>

            <x-slot name="content3">
                <x-admin.section title="Your payment data" subtitle="Check and update your payments data" no-shadow>
                    <x-slot name="content">
                    </x-slot>
                </x-admin.section>
            </x-slot>

            <x-slot name="content4">
                <x-admin.section title="Delete account" no-shadow>
                    <x-slot name="content">

                        <div class="text-admin-danger-normal">
                            <p class="mb-4">
                                By clicking the button your account will be deleted permanently, this will delete
                                everything
                                related to it and cannot be recovered.
                            </p>

                            <x-common.button variant="danger-outlined" prepend-icon="exclamation-circle"
                                text="I know this and I want to delete my account!" />
                        </div>

                    </x-slot>
                </x-admin.section>
            </x-slot>

        </x-common.tab>

    </x-slot>
</x-admin.page>
