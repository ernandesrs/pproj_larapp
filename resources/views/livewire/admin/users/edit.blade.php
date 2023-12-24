<x-admin.page
    title="{{ $title }}"
    :breadcrumbs="[
        [
            'text' => __('words.users'),
            'href' => route('admin.users'),
        ],
        [
            'text' => __('words.edit'),
            'href' => route('admin.users.edit', ['user' => $user->id]),
        ],
    ]">
    <x-slot name="content">

    </x-slot>
</x-admin.page>
