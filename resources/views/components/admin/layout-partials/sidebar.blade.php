@props([
    'navigations' => [],
])

<div
    x-show="show_sidebar"
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="-translate-x-full"
    x-transition:enter-end="-translate-x-0"
    x-transition:leave="transition ease-in duration-100"
    x-transition:leave-start="-translate-x-0"
    x-transition:leave-end="-translate-x-full"

    class="bg-admin-dark-dark-1 fixed z-50 w-[80vw] h-screen shadow-2xl sm:w-[325px] lg:relative lg:z-0"
    style="display: none">
    SIDEBAR
</div>
