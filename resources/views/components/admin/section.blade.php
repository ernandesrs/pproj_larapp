@props([
    'title' => null,
    'subtitle' => null,
])

<div
    {{ $attributes->merge(['class' => 'border px-6 py-5 bg-admin-light-light-2 dark:bg-admin-dark-dark-1 dark:border-front-dark-normal']) }}>
    @if ($title)
        <div class="mb-4">
            <h1
                class="text-xl font-semibold mb-1 text-admin-dark-normal text-opacity-75 dark:text-admin-light-normal dark:opacity-90">
                {{ $title }}
            </h1>
            @if ($subtitle)
                <p
                    class="text-base font-semibold text-admin-dark-normal text-opacity-50 dark:text-admin-light-normal dark:opacity-80">
                    {{ $subtitle }}
                </p>
            @endif
        </div>
    @endif

    <div>
        {{ $slot }}
    </div>
</div>
