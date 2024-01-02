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

    {{-- page actions --}}
    @can(\App\Enums\PermissionsEnum::CREATE_ROLES->value)
        <x-slot name="actions">

            <x-admin.buttons.clickable
                as="link"
                href="#"
                text="{{ __('words.new') }}"
                prepend-icon="plus-lg"
                variant="success"
                flat
                sm />

        </x-slot>
    @endcan

    {{-- page content --}}
    <x-admin.views.role-fields
        :role=$role
        :permissions=$permissions />

</x-admin.layout.page>
