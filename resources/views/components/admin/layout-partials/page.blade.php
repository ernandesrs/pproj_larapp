@props([
    'title' => null,
    'subtitle' => null,
    'notContained' => false,
])

<div class="flex-1 flex flex-col py-6">
    @if (!empty($title))
        <div class="pb-6">
            <h1 class="text-2xl">
                {{ $title }}
            </h1>
            @if (!empty($subtitle))
                <p class="text-lg">
                    {{ $subtitle }}
                </p>
            @endif
        </div>
    @endif

    <div class="flex-1 {{ $notContained ? '' : 'border bg-admin-white py-4 px-6' }}">
        {{ $slot }}
    </div>
</div>
