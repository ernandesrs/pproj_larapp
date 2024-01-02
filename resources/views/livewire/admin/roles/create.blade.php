<div>
    {{-- as component --}}

    <x-admin.activator
        target="dialog_create_role">
        <x-admin.buttons.clickable
            as="button"
            text="{{ __('words.new') }}"
            prepend-icon="plus-lg"
            variant="success"
            flat
            sm />
    </x-admin.activator>

    <x-admin.dialog
        title="{{ __('admin/phrases.new_role') }}"
        id="dialog_create_role">

        <x-admin.form.field
            wire:model.blur="roleName"
            label="{{ __('admin/phrases.role_name') }}"
            error="{{ $errors->first('roleName') }}" />

        <x-slot name="footer">
            <x-admin.buttons.clickable
                prepend-icon="check-lg"
                wire:click="register"
                wire:loading.class="animate-pulse"
                wire:loading.attr="disabled"
                text="{{ __('words.register') }}"
                sm
                no-transform />
        </x-slot>

    </x-admin.dialog>
</div>
