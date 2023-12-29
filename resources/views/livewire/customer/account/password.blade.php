<x-customer.form.form
    action="update"
    submit-text="{{ __('words.update') }} {{ strtolower(__('words.password')) }}">

    <div class="grid grid-cols-12 gap-x-5 gap-y-8">
        <x-customer.form.field
            wire:model="data.password"
            label="{{ __('words.password') }}"
            class="col-span-6"
            type="password" error="{{ $errors->first('data.password') }}" />

        <x-customer.form.field
            wire:model="data.password_confirmation"
            label="{{ __('words.password_confirmation') }}"
            class="col-span-6"
            type="password" error="{{ $errors->first('data.password_confirmation') }}" />
    </div>

</x-customer.form.form>
