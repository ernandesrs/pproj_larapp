@props([])

<tr {{ $attributes->merge(['class' => 'border-b dark:border-admin-dark-normal transition duration-300 bg-admin-light-light-2 hover:bg-admin-light-light-1 dark:bg-admin-dark-dark-1 dark:hover:bg-admin-dark-normal']) }}>
    {{ $slot }}
</tr>
