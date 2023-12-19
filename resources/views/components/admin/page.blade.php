@props(['icon', 'title', 'subtitle', 'actionCreate', 'breadcrumbs'])

<div class="">
    {{-- page header --}}
    @if (!empty($title) || !empty($subtitle))
        <div class="mb-8 flex flex-wrap py-4">
            {{-- title/breadcrumbs --}}
            <div class="basis-full md:basis-5/12 lg:basis-4/12 flex flex-col mb-4 md:mb-0">

                <x-admin.breadcrumb :items="$breadcrumbs ?? []" />

                <h1 class="text-2xl md:text-3xl mb-2">
                    @isset($icon)
                        <i class="bi bi-{{ $icon }}"></i>
                    @endisset
                    {{ $title }}
                </h1>
                @isset($subtitle)
                    <p class="text-base opacity-80">{{ $subtitle }}</p>
                @endisset
            </div>

            {{-- actions --}}
            <div
                class="basis-full md:basis-7/12 lg:basis-8/12 flex flex-wrap gap-4 justify- items-center md:justify-end">
                @isset($actionCreate)
                    <x-admin.button as="link" href="{{ $actionCreate['href'] }}" prepend-icon="plus-lg"
                        text="{{ $actionCreate['text'] ?? 'New' }}" variant="success" wire:navigate />
                @endisset
                @isset($actions)
                    {{ $actions }}
                @endisset
            </div>
        </div>
    @endif

    {{-- page content --}}
    <div class="">
        {{ $content }}
    </div>
</div>
