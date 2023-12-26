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

    <x-slot name="content">

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
                        <x-common.confirmation-dialog
                            type="danger"
                            confirm-action="delete({{ $user->id }})"
                            title="{{ __('messages.confirmation.delete_user_title', ['name' => $user->first_name]) }}"
                            text="{{ __('messages.confirmation.delete_user_text', ['name' => $user->first_name . ' ' . $user->last_name]) }}"
                            id="delete_user_confirmation_{{ $user->id }}" />

                        <td>
                            <x-common.list.list-actions
                                action-edit="{{ route('admin.users.edit', ['user' => $user->id]) }}"
                                action-show="{{ route('admin.users.show', ['user' => $user->id]) }}">
                                {{-- custom actions prepend --}}
                                <x-slot name="prependActions"></x-slot>

                                {{-- custom actions append --}}
                                <x-slot name="appendActions">

                                    <x-common.dialog-activator controls="delete_user_confirmation_{{ $user->id }}">
                                        <x-slot name="activator">
                                            <x-common.button prepend-icon="trash3-fill" text=""
                                                variant="danger-link" small />
                                        </x-slot>
                                    </x-common.dialog-activator>

                                </x-slot>
                            </x-common.list.list-actions>
                        </td>
                        <td>
                            <x-common.thumb type="avatar" size="extrasmall"
                                alternative-text="{{ $user->first_name }}"
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

            <x-slot name="pagination">
                <x-common.list.list-pagination :model="$users" each-side="0" />
            </x-slot>

        </x-common.list.table>

    </x-slot>
</x-admin.page>
