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
            <div class="flex items-center">
                <x-common.dropdown location="right" variant="primary-link" icon="person-circle"
                    text="{{ \Auth::user()->first_name }}">

                    <x-slot name="content">

                        <div class="flex flex-col items-center justify-center">
                            <x-common.thumb size="large" alternative-text="{{ \Auth::user()->first_name }}"
                                image="{{ \Auth::user()->photo ? \Storage::url(\Auth::user()->photo) : '' }}" />
                            <div class="w-full text-center py-3">
                                <p class="font-semibold text-lg mb-4">
                                    {{ \Auth::user()->first_name }} {{ \Auth::user()->last_name }}
                                </p>

                                <div class="flex gap-x-4">

                                    <x-common.button as="link" href="#" text="Perfil"
                                        prepend-icon="person-circle" variat="primary" small />
                                    <x-common.button as="link" href="{{ route('auth.logout') }}" text="Sair"
                                        prepend-icon="box-arrow-right" variant="danger-link" small />

                                </div>
                            </div>
                        </div>

                    </x-slot>

                </x-common.dropdown>

                <button class="sidebar-toggler" id="jsSidebarToggler">
                    <i class="bi bi-list"></i>
                </button>
            </div>
        </div>

    </div>
</header>
