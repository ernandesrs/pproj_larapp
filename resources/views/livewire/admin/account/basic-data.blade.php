<x-common.form.form wire:submit="updateBasicData" submit-text="{{ __('words.update') }}"
    submitting-text="{{ __('words.updating') }}">
    <x-slot name="content">
        <div class="flex flex-wrap gap-y-5">
            <div class="basis-full sm:basis-6/12 sm:pr-2">
                <x-common.form.input wire:model="data.first_name" label="{{ __('words.first_name') }}"
                    error="{{ $errors->first('data.first_name') }}" />
            </div>

            <div class="basis-full sm:basis-6/12 sm:pl-2">
                <x-common.form.input wire:model="data.last_name" label="{{ __('words.last_name') }}"
                    error="{{ $errors->first('data.last_name') }}" />
            </div>

            <div class="basis-full sm:basis-6/12 sm:pr-2">
                <x-common.form.input wire:model="data.username" label="{{ __('words.username') }}"
                    error="{{ $errors->first('data.username') }}" />
            </div>

            <div class="basis-full sm:basis-6/12 sm:pl-2">
                <x-common.form.select wire:model="data.gender" :options="[
                    [
                        'value' => 'n',
                        'text' => __('words.undefined'),
                    ],
                    [
                        'value' => 'm',
                        'text' => __('words.male'),
                    ],
                    [
                        'value' => 'f',
                        'text' => __('words.female'),
                    ],
                ]" label="{{ __('words.gender') }}"
                    error="{{ $errors->first('data.gender') }}" />
            </div>

            <div class="basis-full">
                <x-common.form.input wire:model="data.email" label="{{ __('words.email') }}"
                    error="{{ $errors->first('data.email') }}" disabled />
            </div>
        </div>
    </x-slot>
</x-common.form.form>
