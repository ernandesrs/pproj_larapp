@props([
    'columns' => [],
])

<div class="overflow-x-auto">
    <table
        class="w-full divide-y-2 divide-admin-light-dark-2 bg-admin-light-light-2 dark:bg-admin-dark-dark-1 table-fixed border dark:border-admin-dark-normal">
        <thead>
            <x-admin.list.table.row>
                @foreach ($columns as $column)
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-admin-dark-light-2 text-left">
                        <span class="block py-3">
                            {{ $column['label'] }}
                        </span>
                    </th>
                @endforeach
            </x-admin.list.table.row>
        </thead>

        <tbody class="divide-y divide-admin-light-dark-2">
            {{ $slot }}
        </tbody>
    </table>
</div>