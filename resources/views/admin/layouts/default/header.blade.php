<header class="header">
    <div class="container">

        <div class="header-inner">
            {{-- left --}}
            <div>
                <a class="uppercase font-bold" href="{{ route('admin.index') }}">
                    {{ config('app.name') }}
                </a>
            </div>

            {{-- center --}}
            <div>
            </div>

            {{-- right --}}
            <div>
                <button class="sidebar-toggler" id="jsSidebarToggler">
                    <i class="bi bi-list"></i>
                </button>
            </div>
        </div>

    </div>
</header>
