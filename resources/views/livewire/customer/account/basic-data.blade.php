<x-customer.form.form
    action="update"
    submit-text="{{ __('words.update') }} {{ strtolower(__('phrases.basic_data')) }}">

    <div class="grid grid-cols-12 gap-x-5 gap-y-8">
        <x-customer.form.field class="col-span-6"
            type="text" wire:model="data.first_name" />

        <x-customer.form.field class="col-span-6"
            type="text" wire:model="data.last_name" />

        <x-customer.form.field class="col-span-6"
            type="text" wire:model="data.username" />

        <x-customer.form.field class="col-span-6"
            type="select" wire:model="data.gender"
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
            ]" />

        <x-customer.form.field class="col-span-12"
            type="email" wire:model="data.email" disabled />
    </div>

</x-customer.form.form>
