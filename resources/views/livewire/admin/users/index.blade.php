<x-admin.layout.page
    :breadcrumbs="[
        [
            'label' => __('words.users'),
            'route' => [
                'name' => 'admin.users',
            ],
        ],
    ]"
    title="{{ __('words.users') }}"
    subtitle="{{ __('admin/phrases.manage_users') }}">

    <x-slot name="actions">

        <x-admin.buttons.clickable
            as="link"
            href="{{ route('admin.users.create') }}"
            prepend-icon="plus-lg"
            variant="success"
            text="{{ __('words.new') }}"
            sm flat />

    </x-slot>

    <x-admin.list.filter />

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

    <x-admin.list.pagination
        :model="$users" each-side="1" />

</x-admin.layout.page>
