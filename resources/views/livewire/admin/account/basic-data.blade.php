<x-admin.form.form
    action="updateBasicData"
    submitText="{{ __('words.update') }} {{ __('words.profile') }}">

    <div class="grid grid-cols-12 gap-6 py-4">

        <x-admin.form.field
            class="col-span-12 sm:col-span-6"
            label="{{ __('words.first_name') }}"
            wire:model="data.first_name"
            type="text"
            error="{{ $errors->first('data.first_name') }}" />

        <x-admin.form.field
            class="col-span-12 sm:col-span-6"
            label="{{ __('words.last_name') }}"
            wire:model="data.last_name"
            type="text"
            error="{{ $errors->first('data.last_name') }}" />

        <x-admin.form.field
            class="col-span-12 sm:col-span-6"
            label="{{ __('words.username') }}"
            wire:model="data.username"
            type="text"
            error="{{ $errors->first('data.username') }}" />

        <x-admin.form.field
            class="col-span-12 sm:col-span-6"
            label="{{ __('words.gender') }}"
            wire:model="data.gender"
            type="select"
            :options="[
                [
                    'label' => __('words.undefined'),
                    'value' => 'n',
                ],
                [
                    'label' => __('words.male'),
                    'value' => 'm',
                ],
                [
                    'label' => __('words.female'),
                    'value' => 'f',
                ],
            ]"
            error="{{ $errors->first('data.gender') }}" />

        <x-admin.form.field
            class="col-span-12"
            label="{{ __('words.email') }}"
            wire:model="data.email"
            type="email"
            disabled />

    </div>

</x-admin.form.form>
