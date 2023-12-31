<div class="grid grid-cols-12 gap-6">
    <x-admin.form.field class="col-span-12 lg:col-span-6" wire:model="data.password" type="password"
        label="{{ __('words.password') }}" error="{{ $errors->first('data.password') }}" />

    <x-admin.form.field class="col-span-12 lg:col-span-6" wire:model="data.password_confirmation" type="password"
        label="{{ __('words.password_confirmation') }}" error="{{ $errors->first('data.password_confirmation') }}" />
</div>