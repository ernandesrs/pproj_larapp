@props([
    'role' => null,
    'permissions' => null,
])

<div class="grid grid-cols-12 gap-6">

    <x-admin.form.field
        wire:model="data.display_name"
        class="col-span-12"
        label="{{ __('words.role') }}"
        :disabled="$this->data['id'] ?? null ? true : false" />

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
