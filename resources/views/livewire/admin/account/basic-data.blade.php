<x-common.form.form wire:submit="updateBasicData" submit-text="Update profile" submitting-text="Updating profile">
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
                <x-common.form.input wire:model="data.email" label="E-mail" error="{{ $errors->first('data.email') }}"
                    disabled />
            </div>
        </div>
    </x-slot>
</x-common.form.form>
