@props([])

<header class="flex items-center bg-customer-light-light-1 border-b h-16">
    <div class="container">
        <div class="flex items-center">
            <div>
                <a wire:navigate href="{{ route('admin.index') }}">
                    <span>{{ strtoupper(config('app.name')) }}</span><span class="font-semibold">ADMIN</span>
                </a>
            </div>

            <div class="ml-auto">
                <button
                    x-on:click="toggleSidebar"
                    class="text-3xl">
                    <x-admin.icon name="list" />
                </button>
            </div>
        </div>
    </div>
</header>
