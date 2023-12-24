<x-admin.page
    title="{{ $title }}" subtitle="{{ __('words.users') }} list"
    :breadcrumbs="[
        [
            'text' => __('words.users'),
            'href' => route('admin.users'),
        ],
    ]"
    icon="people-fill">
    <x-slot name="content">

        <x-common.confirmation-dialog id="list_delete_item_confirmation" confirm-action="">
        </x-common.confirmation-dialog>

        <x-common.list.table
            :columns="[
                [
                    'text' => __('words.actions'),
                ],
                [
                    'text' => __('words.avatar'),
                ],
                [
                    'text' => __('words.name'),
                ],
                [
                    'text' => __('words.username'),
                ],
                [
                    'text' => __('words.email'),
                ],
            ]">

            <x-slot name="content">
                @foreach ($users as $user)
                    <tr>
                        <td>
                            <x-common.list.list-actions></x-common.list.list-actions>
                        </td>
                        <td>
                            <x-common.thumb type="avatar" size="extrasmall" alternative-text="{{ $user->first_name }}"
                                image="{{ $user->photo ? \Storage::url($user->photo) : '' }}" />
                        </td>
                        <td>
                            {{ $user->first_name }} {{ $user->last_name }}</td>
                        <td>
                            {{ $user->username }}
                        </td>
                        <td>
                            {{ $user->email }}
                        </td>
                    </tr>
                @endforeach
            </x-slot>

        </x-common.list.table>

    </x-slot>
</x-admin.page>
