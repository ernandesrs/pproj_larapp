@props(['items'])

<aside
    x-show="show"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="-translate-x-full"
    x-transition:enter-end="-translate-x-0"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="-translate-x-0"
    x-transition:leave-end="-translate-x-full"

    class="w-[85vw] h-screen fixed z-50 p-4 pr-0 sm:w-96 lg:w-80 lg:relative lg:z-0"
    style="display: none;">

    {{-- inner --}}
    <div class="aside bg-gradient-to-b from-customer-primary-dark-2 to-customer-primary-normal h-full overflow-y-auto rounded-3xl px-6 py-4 shadow-lg">

        {{-- head --}}
        <x-customer.partials.head />

        @foreach ($items as $item)
            <x-customer.partials.navigation-group
                title="{{ $item['title'] }}"
                :items="$item['items']" />
        @endforeach

    </div>

</aside>
