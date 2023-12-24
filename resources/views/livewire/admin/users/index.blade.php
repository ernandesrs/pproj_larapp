<x-admin.page
    title="{{ $title }}"
    :breadcrumbs="[
        [
            'text' => __('words.users'),
            'href' => route('admin.users'),
        ],
    ]"
    :actionCreate="[
        'text' => __('words.new') . ' ' . __('words.user'),
        'href' => route('admin.users.create'),
    ]"
    icon="people-fill">
    <x-slot name="actions">
        <x-common.button text="{{ __('words.administrators') }}" prepend-icon="person-fill-gear" />
    </x-slot>

    <x-slot name="content">

        <x-common.confirmation-dialog id="delete_item_confirmation" confirm-action="">
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
                            <x-common.list.list-actions
                                action-edit="{{ route('admin.users.edit', ['user' => $user->id]) }}"
                                action-show="{{ route('admin.users.show', ['user' => $user->id]) }}">
                                {{-- custom actions prepend --}}
                                <x-slot name="prependActions"></x-slot>

                                {{-- custom actions append --}}
                                <x-slot name="appendActions"></x-slot>
                            </x-common.list.list-actions>
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
