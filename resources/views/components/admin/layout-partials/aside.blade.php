@props(['navs'])

<aside class="aside">
    <div class="aside-header">
        <div class="flex flex-wrap justify-center">
            <div
                class="w-20 h-20 bg-slate-50 border-4 border-white rounded-full shadow-lg relative flex justify-center items-center overflow-hidden">
                @if ($photo = \Auth::user()->photo)
                    <img class="w-full h-full absolute" src="{{ $photo }}"
                        alt="{{ \Auth::user()->username }} Photo">
                @else
                    <span class="text-4xl absolute font-semibold text-gray-500">{{ \Auth::user()->username[0] }}</span>
                @endif
            </div>

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
