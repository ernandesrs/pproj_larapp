<div class="flex flex-wrap gap-y-5">
    <div class="basis-full md:basis-6/12 md:pr-2">
        <x-common.form.input wire:model="data.password" type="password" label="{{ __('words.password') }}"
            error="{{ $errors->first('data.password') }}" />
    </div>
    <div class="basis-full md:basis-6/12 md:pl-2">
        <x-common.form.input wire:model="data.password_confirmation" type="password"
            label="{{ __('words.password_confirmation') }}"
            error="{{ $errors->first('data.password_confirmation') }}" />
    </div>
</div>
