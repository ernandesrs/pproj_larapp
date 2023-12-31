@props([])

<header
    class="flex items-center bg-admin-light-light-1 dark:bg-admin-dark-dark-2 border-b dark:border-admin-dark-normal h-16">
    <div class="container">
        <div class="flex items-center">
            <div>
                <x-admin.dropdown
                    size="small"
                    location="left">
                    <x-slot name="activator">
                        <x-admin.buttons.clickable
                            prepend-icon="three-dots-vertical"
                            variant="primary"
                            link
                            no-transform />
                    </x-slot>
                </x-admin.dropdown>
            </div>

            <div class="ml-auto flex items-center gap-1">
                <div class="flex items-center gap-1 text-admin-dark-light-2">
                    <x-admin.buttons.clickable
                        x-on:click="toggleTheme"
                        x-show="current_theme=='light'"
                        prepend-icon="moon-fill"
                        variant="dark"
                        link
                        no-transform />

                    <x-admin.buttons.clickable
                        x-on:click="toggleTheme"
                        x-show="current_theme=='dark'"
                        prepend-icon="brightness-high-fill"
                        variant="light"
                        link
                        no-transform />

                    <x-admin.dropdown
                        size="normal"
                        location="right">
                        <x-slot name="activator">
                            <x-admin.buttons.clickable
                                prepend-icon="bell-fill"
                                variant="primary"
                                link
                                no-transform />
                        </x-slot>
                    </x-admin.dropdown>
                </div>

                <button
                    x-on:click="toggleSidebar"
                    class="text-3xl w-12 h-12 flex items-center justify-center">
                    <x-admin.icon name="list" />
                </button>
            </div>
        </div>
    </div>
</header>
