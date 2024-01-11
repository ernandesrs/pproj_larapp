@props([])

<tr
    {{ $attributes->merge([
        'class' => implode(' ', [
            // default
            'border-b transition duration-300 hover:bg-admin-light-light-1',
    
            // dark
            'dark:border-admin-dark-normal dark:hover:bg-admin-dark-normal',
        ]),
    ]) }}>
    {{ $slot }}
</tr>
