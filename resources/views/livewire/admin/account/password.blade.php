<x-common.form.form wire:submit="update" submit-text="Update password" submitting-text="Updating password">
    <x-slot name="content">
        <div class="flex flex-wrap gap-y-5">
            <div class="basis-full md:basis-6/12 md:pr-2">
                <x-common.form.input wire:model="password.password" type="password" label="Password"
                    error="{{ $errors->first('password.password') }}" />
            </div>
            <div class="basis-full md:basis-6/12 md:pl-2">
                <x-common.form.input wire:model="password.password_confirmation" type="password"
                    label="Password confirmation" error="{{ $errors->first('password.password_confirmation') }}" />
            </div>
        </div>
    </x-slot>
</x-common.form.form>
