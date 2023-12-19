@props(['headerIcon', 'title', 'subtitle', 'noShadow', 'noBorder'])

<div
    class="h-full {{ isset($noShadow) && $noShadow ? 'shadow-none' : 'shadow-md' }} {{ isset($actions) ? 'pt-5' : 'py-5' }} {{ isset($noBorder) && $noBorder ? 'border-0' : 'border' }} rounded w-full">
    {{-- header --}}
    @if (isset($title) || isset($subtitle))
        <div class="flex items-start mb-2 px-6">
            @isset($headerIcon)
                <div class="hidden text-5xl mr-3 sm:block">
                    <i class="bi bi-{{ $headerIcon }} text-admin-dark-ligth-2 opacity-90"></i>
                </div>
            @endisset
            <div class="">
                @isset($title)
                    <h4 class="font-medium text-admin-dark-ligth-2 opacity-90 md:font-semibold text-lg sm:text-xl">
                        {{ $title }}
                    </h4>
                @endisset

                @isset($subtitle)
                    <p class="text-admin-dark-ligth-2 text-opacity-60">
                        {{ $subtitle }}
                    </p>
                @endisset
            </div>
        </div>
    @endif

    {{-- content --}}
    <div class="px-8 py-4">
        {{ $content }}
    </div>

    {{-- footer/actions --}}
    @isset($actions)
        <div class="px-6 mt-2 py-4 border-t flex justify-end gap-x-4">
            {{ $actions }}
        </div>
    @endisset
</div>
