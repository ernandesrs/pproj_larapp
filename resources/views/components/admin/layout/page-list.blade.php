<x-admin.layout.page>

    {{-- filter --}}
    <x-admin.list.filter />

    {{-- list --}}
    {{ $slot }}

    {{-- pagination --}}
    <x-admin.list.pagination
        :model="$this->getList()" each-side="1" />

</x-admin.layout.page>
