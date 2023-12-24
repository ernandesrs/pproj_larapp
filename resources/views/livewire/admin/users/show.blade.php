<x-admin.page
    title="{{ $title }}"
    :breadcrumbs="[
        [
            'text' => __('words.users'),
            'href' => route('admin.users'),
        ],
        [
            'text' => __('words.see'),
            'href' => route('admin.users.show', ['user' => $user->id]),
        ],
    ]">
    <x-slot name="content">

    </x-slot>
</x-admin.page>
