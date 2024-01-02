<div>
    <div class="flex flex-wrap items-center gap-2">
        @foreach ($this->roles as $role)
            <div class="flex items-center">
                <x-admin.toggler
                    wire:click="addOrRmRole({{ $role->id }})"
                    :active="$this->user->hasRole($role)" />
                <span class="block ml-3">
                    {{ \App\Enums\RolesEnum::tryFrom($role->name)?->label() ?? $role->name }}
                </span>
            </div>
        @endforeach
    </div>
</div>
