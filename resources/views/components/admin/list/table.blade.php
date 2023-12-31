@props([
    'columns' => [],
])

<div class="overflow-x-auto">
    <table
        {{ $attributes->merge(['class' => 'w-full bg-admin-light-light-2 dark:bg-admin-dark-dark-1 table-fixed border dark:border-admin-dark-normal']) }}>
        <thead>
            <x-admin.list.table.row class="bg-admin-light-light-1 dark:bg-admin-dark-dark-1">
                @foreach ($columns as $column)
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-admin-dark-light-2 text-left">
                        <span class="block py-1">
                            {{ $column['label'] }}
                        </span>
                    </th>
                @endforeach
            </x-admin.list.table.row>
        </thead>

        <tbody class="">
            {{ $slot }}
        </tbody>
    </table>
</div>
