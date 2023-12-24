<x-admin.page
    title="{{ $title }}"
    :breadcrumbs="[
        [
            'text' => __('words.users'),
            'href' => route('admin.users'),
        ],
        [
            'text' => __('words.register'),
            'href' => route('admin.users.create'),
        ],
    ]">
    <x-slot name="content">

    </x-slot>
</x-admin.page>
