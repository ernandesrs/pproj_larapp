@props([
    'role' => null,
    'permissions' => null,
])

<div class="grid grid-cols-12 gap-6">

    <x-admin.section
        class="col-span-12 border p-10"
        title="{{ __('admin/phrases.role_name') }}">
        <x-admin.form.field
            wire:model="{{ $this->data['id'] ?? null ? 'data.display_name' : 'data.name' }}"
            class="col-span-12"
            error="{{ $errors->first('data.name') }}"
            :disabled="$this->data['id'] ?? null ? true : false" />
    </x-admin.section>

    @if ($this->data['id'] ?? null)
        <x-admin.section
            class="col-span-12 border p-10"
            title="{{ __('words.permissions') }}">

            <div class="flex flex-wrap gap-6 py-4">
                @if ($role->name !== \App\Enums\RolesEnum::SUPER_USER->value)
                    @php
                        $oldGroup = '';
                    @endphp
                    @foreach ($permissions as $permission)
                        @php
                            $group = explode('_', $permission->name)[1];
                            if ($group !== $oldGroup) {
                                echo '<hr class="w-full border-b dark:border-admin-dark-normal">';

                                $oldGroup = $group;
                            }
                        @endphp
                        <div class="flex items-center">
                            <x-admin.toggler
                                :active="$role->hasPermissionTo($permission->name)"
                                wire:click="addOrRmPermission('{{ $permission->id }}')" /> <span
                                class="inline-block ml-2 text-sm">
                                {{ $permission->label() }}
                            </span>
                        </div>
                    @endforeach
                @else
                    <p class="text-admin-dark-light-2 text-opacity-50">
                        {{ __('admin/messages.alert.cannot_edit_super_user_permissions') }}</p>
                @endif
            </div>

        </x-admin.section>
    @endif

</div>
