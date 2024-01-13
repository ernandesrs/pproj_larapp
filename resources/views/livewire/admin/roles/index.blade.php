<x-admin.layout.page-list>

    <x-admin.list.table>

        @foreach ($roles as $role)
            <x-admin.list.table.row>
                <x-admin.list.table.col>
                    <x-admin.text.labeled-text
                        text="{{ \App\Enums\RolesEnum::tryFrom($role->name)?->label() ?? $role->name }}"
                        label="{{ __('words.name') }}: {{ $role->name }}" />
                </x-admin.list.table.col>

                <x-admin.list.table.col>
                    @php
                        $permissions = $role->permissions;
                    @endphp
                    <div class="flex flex-wrap gap-1">
                        @for ($i = 0; $i < count($permissions); $i++)
                            @if ($i < 3)
                                <x-admin.badge variant="light" text="{{ $permissions[$i]->label() }}" />
                            @else
                                @php
                                    $left = count($permissions) - $i;
                                    $i = count($permissions);
                                @endphp
                                <a wire:navigation href="{{ route('admin.roles.edit', ['role' => $role->id]) }}">
                                    <x-admin.badge variant="light" outlined text="+{{ $left }}" />
                                </a>
                            @endif
                        @endfor
                    </div>
                </x-admin.list.table.col>

                <x-admin.list.table.col
                    class="flex justify-end items-center">

                    <x-admin.list.actions
                        wire-action-edit="{{ route('admin.roles.edit', ['role' => $role->id]) }}"
                        action-edit-permission="{{ \App\Enums\Admin\RolePermissionsEnum::UPDATE->value }}"

                        wire-action-delete="deleteRole({{ $role->id }})"
                        action-delete-permission="{{ \App\Enums\Admin\RolePermissionsEnum::DELETE->value }}"

                        delete-confirm-text="{{ __('words.delete') }} {{ __('words.role') }}?" />

                </x-admin.list.table.col>

            </x-admin.list.table.row>
        @endforeach

    </x-admin.list.table>

</x-admin.layout.page-list>
