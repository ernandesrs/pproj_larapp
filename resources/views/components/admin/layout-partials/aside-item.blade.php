@props([
    'title' => 'Nav group title',
    'items' => [],
])

<div class="aside-item">
    @isset($title)
        <h5 class="aside-item-title">{{ $title }}</h5>
    @endisset
    <ul class="aside-item-nav">
        @foreach ($items ?? [] as $navItem)
            @if (!isset($navItem['items']))
                <li>
                    <a wire:navigate href="{{ $navItem['href'] }}"
                        class="aside-item-nav-link {{ in_array(\Route::currentRouteName(), $navItem['activeIn'] ?? []) ? 'aside-item-nav-link-active' : '' }}">
                        @isset($navItem['icon'])
                            <i class="bi bi-{{ $navItem['icon'] }} mr-2"></i>
                        @endisset
                        {{ $navItem['text'] }}
                    </a>
                </li>
            @else
                <li>
                    <details {{ in_array(\Route::currentRouteName(), $navItem['activeIn'] ?? []) ? 'open' : null }}
                        class="group [&_summary::-webkit-details-marker]:open">
                        <summary class="aside-item-subnav-toggler">
                            @isset($navItem['icon'])
                                <i class="bi bi-{{ $navItem['icon'] }} mr-2"></i>
                            @endisset

                            <span class="text-sm font-medium"> {{ $navItem['text'] }} </span>

                            <span class="ml-auto shrink-0 transition duration-300 group-open:-rotate-180">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </summary>

                        <ul class="aside-item-subnav">
                            @foreach ($navItem['items'] as $navSubitem)
                                <li>
                                    <a wire:navigate
                                        class="aside-item-subnav-link {{ in_array(\Route::currentRouteName(), $navSubitem['activeIn'] ?? []) ? ' aside-item-nav-link-active' : '' }}"
                                        href="{{ $navSubitem['href'] }}">
                                        @isset($navSubitem['icon'])
                                            <i class="bi bi-{{ $navSubitem['icon'] }} mr-2"></i>
                                        @endisset
                                        {{ $navSubitem['text'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </details>
                </li>
            @endif
        @endforeach
    </ul>
</div>
