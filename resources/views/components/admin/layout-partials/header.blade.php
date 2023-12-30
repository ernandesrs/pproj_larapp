@props([])

<header class="flex items-center bg-admin-light-light-1 dark:bg-admin-dark-dark-2 border-b dark:border-admin-dark-normal h-16">
    <div class="container">
        <div class="flex items-center">
            <div>
            </div>

            <div class="ml-auto flex items-center gap-1">
                <button
                    x-on:click="toggleTheme"
                    class="text-xl w-12 h-12 flex items-center justify-center">
                    <x-admin.icon x-show="current_theme=='light'" name="moon-fill" />
                    <x-admin.icon x-show="current_theme=='dark'" name="brightness-high-fill" />
                </button>

                <button
                    x-on:click="toggleSidebar"
                    class="text-3xl w-12 h-12 flex items-center justify-center">
                    <x-admin.icon name="list" />
                </button>
            </div>
        </div>
    </div>
</header>
