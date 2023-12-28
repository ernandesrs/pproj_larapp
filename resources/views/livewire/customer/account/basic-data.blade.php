<x-customer.form.form
    action="update"
    submit-text="{{ __('words.update') }} {{ strtolower(__('phrases.basic_data')) }}">

    <div class="grid grid-cols-12 gap-x-5 gap-y-8">
        <x-customer.form.field
            wire:model="data.first_name"
            label="{{ __('words.first_name') }}"
            class="col-span-6"
            type="text" error="{{ $errors->first('data.first_name') }}" />

        <x-customer.form.field
            wire:model="data.last_name"
            label="{{ __('words.last_name') }}"
            class="col-span-6"
            type="text" error="{{ $errors->first('data.last_name') }}" />

        <x-customer.form.field
            wire:model="data.username"
            label="{{ __('words.username') }}"
            class="col-span-6"
            type="text" error="{{ $errors->first('data.username') }}" />

        <x-customer.form.field
            wire:model="data.gender"
            label="{{ __('words.gender') }}"
            class="col-span-6"
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
            ]" error="{{ $errors->first('data.gender') }}" />

        <x-customer.form.field
            wire:model="data.email"
            label="{{ __('words.email') }}"
            class="col-span-12"
            type="email" error="{{ $errors->first('data.email') }}" disabled />
    </div>

</x-customer.form.form>
