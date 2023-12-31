@props([
    'icon' => null,
    'title' => null,
    'subtitle' => null,
    'contained' => false,
    'showActions' => true,
])

<div class="flex-1 flex flex-col py-6">
    @if (!empty($title))
        <div class="flex flex-wrap items-center pb-6">
            <div
                class="basis-full md:basis-6/12 xl:basis-5/12 font-medium flex items-center text-admin-dark-normal dark:text-admin-light-dark-1">
                @if ($icon)
                    <x-admin.icon name="{{ $icon }}"
                        class="mr-3 hidden sm:inline-block text-4xl xl:text-5xl" />
                @endif
                <div>
                    <h1 class="text-xl font-semibold xl:text-2xl">
                        {{ $title }}
                    </h1>
                    @if (!empty($subtitle))
                        <p class="text-base text-admin-dark-light-2 dark:text-admin-light-dark-2 text-opacity-75 mt-1">
                            {{ $subtitle }}
                        </p>
                    @endif
                </div>
            </div>

            @if ($showActions && ($actions ?? null))
                <div class="basis-full md:basis-6/12 xl:basis-7/12 mt-4 flex justify-start md:mt-0 md:justify-end">
                    {{ $actions }}
                </div>
            @endif
        </div>
    @endif

    <div
        class="flex-1 {{ !$contained ? '' : 'border dark:border-admin-dark-normal bg-admin-light-light-2 dark:bg-admin-dark-normal dark:bg-opacity-10 py-4 px-6' }}">
        {{ $slot }}
    </div>
</div>
