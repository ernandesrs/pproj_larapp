<x-admin.layout.page>

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
