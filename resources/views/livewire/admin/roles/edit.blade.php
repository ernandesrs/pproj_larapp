<x-admin.layout.page
    :breadcrumbs="[
        [
            'label' => __('words.roles'),
            'route' => [
                'name' => 'admin.roles',
            ],
        ],
        [
            'label' => __('words.edit'),
            'route' => [
                'name' => 'admin.roles.edit',
                'params' => [
                    'role' => $role->id,
                ],
            ],
        ],
    ]"
    title="{{ __('words.edit') }} {{ __('words.role') }}"
    subtitle="{{ __('admin/phrases.manage_role') }}">

    @can(\App\Enums\PermissionsEnum::CREATE_ROLES->value)
        <x-slot name="actions">

            <livewire:admin.roles.create />

        </x-slot>
    @endcan

    {{-- page content --}}
    <x-admin.views.role-fields
        :role=$role
        :permissions=$permissions />

</x-admin.layout.page>
