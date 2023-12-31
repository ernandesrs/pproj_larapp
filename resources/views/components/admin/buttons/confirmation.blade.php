@props([
    'variant' => 'danger',
    'sm' => false,
    'location' => 'center',
    'confirmText' => __('phrases.confirm_to_continue'),
    'buttonConfirm' => __('words.confirm'),
    'buttonCancel' => __('words.cancel'),
    'wireConfirmAction' => null,
])

{{-- 
    text-admin-danger-normal
    text-admin-success-normal
    text-admin-info-normal
    text-admin-dark-normal
    --}}

@php
    if ($wireConfirmAction) {
        $attributes = $attributes->merge([
            'wire:click' => $wireConfirmAction,
            'wire:target' => $wireConfirmAction,
            'wire:loading.class' => 'animate-pulse',
            'wire:loading.attr' => 'disabled',
        ]);
    }
@endphp

<div
    x-data="{
        show: false,
        confirmed: false,
    
        methodShow() {
            this.show = true;
    
            this.clickOutMonitor();
        },
        methodClose() {
            this.show = false;
            this.clickOutMonitorRemove();
        },
        methodConfirmed() {
            this.confirmed = true;
        },
        clickOutMonitor() {
            document.addEventListener('click', this.clickOutHandler);
        },
        clickOutMonitorRemove() {
            document.removeEventListener('click', this.clickOutHandler);
        },
        clickOutHandler(event) {
            if ($el.contains(event.target) || $data.confirmed) {
                return;
            }
    
            $data.methodClose();
        }
    }"
    {{ $attributes->only(['class'])->merge(['class' => 'flex ' . ($location == 'left' ? 'justify-start' : ($location == 'right' ? 'justify-end' : 'justify-center')) . ' items-center']) }}>

    {{-- activator --}}
    <div x-on:click="methodShow">
        {{ $slot ?? $activator }}
    </div>

    {{-- cancel/confirm buttons --}}
    <div
        x-show="show"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="scale-75"
        x-transition:enter-end="opacity-100 scale-100"

        x-transition:leave="transition ease-in duration-100"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="scale-75"

        class="absolute {{ $sm ? 'px-4 py-3' : 'px-6 py-4' }} border bg-admin-white shadow-2xl cursor-default dark:bg-admin-dark-light-1 dark:border-admin-dark-light-1">

        {{-- confirmation text --}}
        <div
            class="text-center font-medium {{ $sm ? 'mb-2' : 'mb-4' }} text-admin-{{ $variant }}-normal {{ $sm ? 'text-sm lg:text-base' : 'text-lg lg:text-xl' }}">
            {{ $confirmText }}
        </div>

        {{-- cancel/confirm --}}
        <div
            class="flex justify-center items-center gap-x-4">
            <x-admin.buttons.clickable
                x-on:click="methodClose"
                prepend-icon="x-lg"
                text="{{ $sm ? '' : $buttonCancel }}"
                outlined
                :xs="$sm"
                :sm="!$sm"
                variant="{{ $variant }}"
                {{ $attributes->only(['wire:target', 'wire:loading.attr', 'wire:loading.class']) }} />

            {{-- confirm --}}
            <x-admin.buttons.clickable
                x-on:click="methodConfirmed"
                prepend-icon="check-lg"
                text="{{ $sm ? '' : $buttonConfirm }}"
                flat
                :xs="$sm"
                :sm="!$sm"
                variant="{{ $variant }}"
                {{ $attributes->only(['wire:target', 'wire:click', 'wire:loading.attr', 'wire:loading.class']) }} />
        </div>
    </div>
</div>
