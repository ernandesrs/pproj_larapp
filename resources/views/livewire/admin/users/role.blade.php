<div>
    <div class="flex flex-wrap items-center gap-2">
        @foreach ($this->roles as $role)
            {{-- promotion to super user needs confirmation --}}
            @if ($role->name == \App\Enums\RolesEnum::SUPER_USER->value && !$this->user->hasRole($role))
                {{-- dialog confirmation --}}
                <x-admin.dialog
                    title="{{ __('words.important') }}"
                    id="super_user_promote_confirm">

                    <p class="mb-2">{!! __('admin/messages.alert.super_admin_promote', [
                        'user' => $this->user->first_name . ' ' . $this->user->last_name,
                    ]) !!}.</p>
                    <p>{{ __('phrases.confirm_to_continue') }}.</p>

                    <x-slot name="footer">
                        <x-admin.buttons.clickable
                            wire:click="addOrRmRole({{ $role->id }})"
                            variant="danger"
                            text="Entendo os riscos, {{ __('words.confirm') }}"
                            sm
                            flat />
                    </x-slot>
                </x-admin.dialog>

                {{-- dialog confirmatio activator --}}
                <x-admin.activator
                    target="super_user_promote_confirm">
                    <div class="flex items-center">
                        <x-admin.toggler
                            :active="$this->user->hasRole($role)" />
                        <span class="block ml-3">
                            {{ \App\Enums\RolesEnum::tryFrom($role->name)?->label() ?? $role->name }}
                        </span>
                    </div>
                </x-admin.activator>
            @else
                <div class="flex items-center">
                    <x-admin.toggler
                        wire:click="addOrRmRole({{ $role->id }})"
                        :active="$this->user->hasRole($role)" />
                    <span class="block ml-3">
                        {{ \App\Enums\RolesEnum::tryFrom($role->name)?->label() ?? $role->name }}
                    </span>
                </div>
            @endif
        @endforeach
    </div>
</div>
