<x-admin.layout.page
    title="{{ __('words.users') }}"
    subtitle="{{ __('admin/phrases.manage_users') }}">

    <x-admin.list.table
        :columns="[
            [
                'label' => __('words.details') . ' ' . strtolower(__('words.user')),
            ],
            [
                'label' => '',
            ],
        ]">

        @foreach ($users as $user)
            <x-admin.list.table.row>
                <x-admin.list.table.col>
                    <div class="flex items-center">
                        <x-common.thumb
                            type="avatar"
                            size="small"
                            image="{{ $user->photo ? \Storage::url($user->photo) : '' }}"
                            alternative-text="{{ $user->first_name }}" />

                        <x-admin.text.labeled-text
                            class="pl-4"
                            bottom
                            text="{{ $user->first_name }} {{ $user->last_name }}"
                            label="{{ $user->email }}" />
                    </div>
                </x-admin.list.table.col>

                <x-admin.list.table.col
                    class="flex justify-end items-center">
                    <x-admin.list.actions
                        wire-action-edit="{{ route('admin.users.edit', ['user' => $user->id]) }}"
                        wire-action-delete="delete({{ $user->id }})" />
                </x-admin.list.table.col>
            </x-admin.list.table.row>
        @endforeach

    </x-admin.list.table>


</x-admin.layout.page>
