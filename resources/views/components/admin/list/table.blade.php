@props([
    'hasActions' => false,
    'columns' => [],
])

@php
    if ($hasActions) {
        $columns = [
            ...$columns,
            [
                'label' => __('words.actions'),
                'class' => 'text-right',
            ],
        ];
    }
@endphp

<div class="overflow-x-auto">
    <table
        {{ $attributes->merge(['class' => 'w-full bg-admin-light-light-2 dark:bg-admin-dark-dark-1 table-auto border dark:border-admin-dark-normal']) }}>
        <thead>
            <x-admin.list.table.row class="">
                @foreach ($columns as $column)
                    <th
                        class="whitespace-nowrap px-4 py-2 font-medium text-admin-dark-light-2 {{ $column['class'] ?? 'text-left' }}">
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
