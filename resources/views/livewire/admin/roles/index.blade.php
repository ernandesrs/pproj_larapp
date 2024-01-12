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
                                <span
                                    class="inline-block bg-admin-light-normal px-3 py-1 text-xs cursor-default dark:bg-admin-dark-normal rounded">
                                    {{ $permissions[$i]->label() }}
                                </span>
                            @else
                                @php
                                    $left = count($permissions) - $i;
                                    $i = count($permissions);
                                @endphp
                                <span
                                    class="inline-block bg-admin-light-light-1 px-3 py-1 text-xs cursor-default dark:bg-admin-dark-light-1 rounded">
                                    +{{ $left }}
                                </span>
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
