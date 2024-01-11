<x-admin.layout.page-list>

    <x-admin.list.table>

        @foreach ($this->getList() as $user)
            <x-admin.list.table.row>
                <x-admin.list.table.col>
                    <div class="flex items-center">
                        <div class="hidden md:block">
                            <x-common.thumb
                                type="avatar"
                                size="small"
                                image="{{ $user->photo ? \Storage::url($user->photo) : '' }}"
                                alternative-text="{{ $user->first_name }}" />
                        </div>

                        <x-admin.text.labeled-text
                            class="pl-4"
                            bottom
                            text="{{ $user->first_name }} {{ $user->last_name }}"
                            label="{{ $user->email }}" />
                    </div>
                </x-admin.list.table.col>

                <x-admin.list.table.col>
                    <div class="flex flex-wrap gap-1">
                        @foreach ($user->roles as $role)
                            <span
                                class="inline-block px-2 py-1 rounded-sm bg-admin-success-dark-1 text-admin-light-normal text-xs cursor-default">
                                {{ \App\Enums\RolesEnum::tryFrom($role->name)?->label() ?? $role->name }}
                            </span>
                        @endforeach
                    </div>
                </x-admin.list.table.col>

                <x-admin.list.table.col
                    class="flex justify-end items-center">
                    <x-admin.list.actions
                        id="{{ $user->id }}"
                        action-edit-permission="{{ \App\Enums\PermissionsEnum::EDIT_USERS->value }}"
                        wire-action-edit="{{ route('admin.users.edit', ['user' => $user->id]) }}"
                        action-delete-permission="{{ \App\Enums\PermissionsEnum::DELETE_USERS->value }}"
                        wire-action-delete="delete({{ $user->id }})" />
                </x-admin.list.table.col>
            </x-admin.list.table.row>
        @endforeach

    </x-admin.list.table>

</x-admin.layout.page-list>
