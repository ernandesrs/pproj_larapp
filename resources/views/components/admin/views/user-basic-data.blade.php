<div class="grid grid-cols-12 gap-6">

    <x-admin.form.field
        class="col-span-12 lg:col-span-6"
        wire:model="data.first_name"
        type="text"
        label="{{ __('words.first_name') }}"
        error="{{ $errors->first('data.first_name') }}" />

    <x-admin.form.field
        class="col-span-12 lg:col-span-6"
        wire:model="data.last_name"
        type="text"
        label="{{ __('words.last_name') }}"
        error="{{ $errors->first('data.last_name') }}" />

    <x-admin.form.field
        class="col-span-12 lg:col-span-6"
        wire:model="data.username"
        type="text"
        label="{{ __('words.username') }}"
        error="{{ $errors->first('data.username') }}" />

    <x-admin.form.field
        class="col-span-12 lg:col-span-6"
        wire:model="data.gender"
        type="select"
        label="{{ __('words.gender') }}"
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
        wire:model="data.email"
        type="text"
        label="{{ __('words.email') }}"
        error="{{ $errors->first('data.email') }}"
        :disabled="$this->data['id'] ?? null ? true : false" />

</div>
