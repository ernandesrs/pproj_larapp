<x-admin.layout.page>

    {{-- filter --}}
    <x-admin.list.filter />

    {{-- list --}}
    <x-admin.list.table
        :hasActions="$this->listHasActions()"
        :columns="$this->getListLabels()">
        {{ $slot }}
    </x-admin.list.table>

    {{-- pagination --}}
    <x-admin.list.pagination
        :model="$this->getList()" each-side="1" />

</x-admin.layout.page>
