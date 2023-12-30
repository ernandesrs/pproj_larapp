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

    class="bg-admin-dark-dark-2 dark:bg-admin-dark-dark-2 dark:border-r dark:border-admin-dark-normal text-admin-light-light-2 text-opacity-75 fixed z-50 w-[80vw] h-screen shadow-2xl overflow-y-auto sm:w-[325px] lg:relative lg:z-0"
    style="display: none">

    <h1>SIDEBAR</h1>

</div>
