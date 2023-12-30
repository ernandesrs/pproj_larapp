@props([
    'navs' => [],
])

<div class="layout-left-side" id="jsSidebar">
    <aside class="aside">
        <x-admin.layout-partials.aside-header />

        <div class="aside-inner">
            @foreach ($navs as $nav)
                <x-admin.layout-partials.aside-item
                    title="{{ $nav['title'] }}"
                    :items="$nav['items']" />
            @endforeach
        </div>
    </aside>
</div>
