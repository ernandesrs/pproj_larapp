<x-admin.form.form
    action="update"
    submitText="{{ __('words.update') }} {{ __('words.password') }}">

    <div class="grid grid-cols-12 gap-6 py-4">

        <x-admin.form.field
            class="col-span-12 sm:col-span-6"
            label="{{ __('words.password') }}"
            wire:model="data.password"
            type="password"
            error="{{ $errors->first('data.password') }}" />

        <x-admin.form.field
            class="col-span-12 sm:col-span-6"
            label="{{ __('words.password_confirmation') }}"
            wire:model="data.password_confirmation"
            type="password"
            error="{{ $errors->first('data.password_confirmation') }}" />

    </div>

</x-admin.form.form>
