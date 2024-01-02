@props([
    'role' => null,
    'permissions' => null,
])

<div class="grid grid-cols-12 gap-6">

    <x-admin.section
        class="col-span-12 border p-10"
        title="{{ __('admin/phrases.role_name') }}">
        <x-admin.form.field
            wire:model="data.display_name"
            class="col-span-12"
            :disabled="$this->data['id'] ?? null ? true : false" />
    </x-admin.section>

    @if ($this->data['id'] ?? null)
        <x-admin.section
            class="col-span-12 border p-10"
            title="{{ __('words.permissions') }}">

            <div class="flex flex-wrap gap-6">
                @foreach ($permissions as $permission)
                    <div class="flex items-center">
                        <x-admin.toggler
                            :active="$role->hasPermissionTo($permission->name)"
                            wire:click="addOrRmPermission('{{ $permission->id }}')" /> <span
                            class="inline-block ml-2 text-sm">
                            {{ \App\Enums\PermissionsEnum::tryFrom($permission->name)?->label() ?? __('words.undefined') }}
                        </span>
                    </div>
                @endforeach
            </div>

        </x-admin.section>
    @endif

</div>
