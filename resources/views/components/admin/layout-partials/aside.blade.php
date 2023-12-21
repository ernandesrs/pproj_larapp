@props(['navs'])

<aside class="aside">
    <x-admin.layout-partials.aside-header />

    <div class="aside-inner">
        @foreach ($navs as $nav)
            @include('components.admin.layout-partials.aside-item', $nav)
        @endforeach
    </div>
</aside>
