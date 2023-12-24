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

        Users

    </x-slot>
</x-admin.page>
