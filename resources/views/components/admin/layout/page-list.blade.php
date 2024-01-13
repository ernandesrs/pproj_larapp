<x-admin.layout.page>

    {{-- filter --}}
    @if ($this->showFilterAndSearchBar())
        <x-admin.list.filter
            :show-search="$this->isSearchable()"
            :show-filters="$this->isFilterable()">
            <x-slot name="filters">
                {{ $filters ?? null }}
            </x-slot>
        </x-admin.list.filter>
    @endif

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
