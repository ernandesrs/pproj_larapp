@props(['navs'])

<aside class="aside">
    <div class="aside-header">
        <div class="flex flex-wrap justify-center">
            <x-common.thumb type="avatar" size="default" image="{{ \Auth::user()->photo }}"
                alternative-text="{{ \Auth::user()->username }}" />

            <div class="w-full pt-3 pb-2 text-center font-semibold text-lg text-gray-500">
                {{ \Auth::user()->username }}
            </div>
        </div>
    </div>

    <div class="aside-inner">
        @foreach ($navs as $nav)
            @include('components.admin.layout-partials.aside-item', $nav)
        @endforeach
    </div>
</aside>
