<x-admin.page title="My profile" subtitle="Manage your profile data" icon="person-circle">
    <x-slot name="content">

        <x-common.tab :tabs="[
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
        ]">

            <x-slot name="content1">
                <x-admin.section title="Your profile photo" subtitle="Update or delete your profile photo" no-shadow
                    no-border>
                    <x-slot name="content">

                        <div class="flex flex-wrap items-center">
                            <x-common.thumb size="extralarge" image="{{ \Storage::url(\Auth::user()->photo) }}"
                                alternative-text="{{ \Auth::user()->first_name }}" />

                            <div class="mt-6 sm:mt-0 ml-4">
                                <livewire:admin.account.photo />
                            </div>
                        </div>

                    </x-slot>
                </x-admin.section>

                <x-admin.section title="Your basic data" subtitle="Check and update your basic profile data" no-shadow
                    no-border>
                    <x-slot name="content">

                        <x-common.form.form wire:submit="updateBasicData" submit-text="Update profile"
                            submitting-text="Updating profile">
                            <x-slot name="content">
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
                                        <x-common.form.select wire:model="data.gender" :options="[
                                            [
                                                'value' => 'n',
                                                'text' => 'Not defined',
                                            ],
                                            [
                                                'value' => 'm',
                                                'text' => 'Male',
                                            ],
                                            [
                                                'value' => 'f',
                                                'text' => 'Female',
                                            ],
                                        ]" label="Gender"
                                            error="{{ $errors->first('data.gender') }}" />
                                    </div>

                                    <div class="basis-full">
                                        <x-common.form.input wire:model="data.email" label="E-mail"
                                            error="{{ $errors->first('data.email') }}" disabled />
                                    </div>
                                </div>
                            </x-slot>
                        </x-common.form.form>

                    </x-slot>
                </x-admin.section>
            </x-slot>

            <x-slot name="content2">
                <x-admin.section title="Your security data" subtitle="Check and update your security data" no-shadow>
                    <x-slot name="content">

                        <livewire:admin.account.password />

                    </x-slot>
                </x-admin.section>
            </x-slot>

        </x-common.tab>

    </x-slot>
</x-admin.page>
