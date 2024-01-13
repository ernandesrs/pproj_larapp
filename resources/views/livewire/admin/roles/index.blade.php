<x-admin.layout.page-list>

    @foreach ($roles as $role)
        <x-admin.list.table.row>
            <x-admin.list.table.col>
                <x-admin.text.labeled-text
                    text="{{ \App\Enums\RolesEnum::tryFrom($role->name)?->label() ?? $role->name }}"
                    label="{{ __('words.name') }}: {{ $role->name }}" />
            </x-admin.list.table.col>

            <x-admin.list.table.col>
                @php
                    $permissions = $role->permissions;
                @endphp
                <div class="flex flex-wrap gap-1">
                    @for ($i = 0; $i < count($permissions); $i++)
                        @if ($i < 3)
                            <x-admin.badge variant="light" sm text="{{ $permissions[$i]->label() }}" />
                        @else
                            @php
                                $left = count($permissions) - $i;
                                $i = count($permissions);
                            @endphp
                            <a wire:navigation href="{{ route('admin.roles.edit', ['role' => $role->id]) }}">
                                <x-admin.badge variant="light" outlined text="+{{ $left }}" />
                            </a>
                        @endif
                    @endfor
                </div>
            </x-admin.list.table.col>

            @if ($this->listHasActions())
                <x-admin.list.table.col
                    class="flex justify-end items-center">
                    <x-admin.list.actions
                        id="{{ $role->id }}" />
                </x-admin.list.table.col>
            @endif

        </x-admin.list.table.row>
    @endforeach

</x-admin.layout.page-list>
