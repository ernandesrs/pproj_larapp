@props([
    'variant' => 'danger',
    'confirmText' => __('phrases.confirm_to_continue'),
    'buttonConfirm' => __('words.confirm'),
    'buttonCancel' => __('words.cancel'),
    'wireConfirmAction' => null,
])

{{-- 
    text-customer-danger-normal
    text-customer-success-normal
    text-customer-info-normal
    text-customer-dark-normal
    --}}

@php
    if ($wireConfirmAction) {
        $attributes = $attributes->merge([
            'wire:click' => $wireConfirmAction,
            'wire:target' => $wireConfirmAction,
            'wire:loading.class' => 'loading',
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
    {{ $attributes->only(['class'])->merge(['class' => 'flex justify-center items-center']) }}>

    {{-- activator --}}
    <div x-on:click="methodShow">
        {{ $activator }}
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

        class="absolute px-6 py-4 border bg-customer-white shadow-2xl rounded-2xl cursor-default">

        {{-- confirmation text --}}
        <div
            class="text-center font-semibold mb-4 text-lg lg:text-xl text-customer-{{ $variant }}-normal">
            {{ $confirmText }}
        </div>

        {{-- cancel/confirm --}}
        <div class="flex justify-center gap-x-4">
            <x-customer.buttons.btn
                x-on:click="methodClose"
                prepend-icon="x-lg"
                text="{{ $buttonCancel }}"
                outlined
                no-transform
                small
                variant="{{ $variant }}" {{ $attributes->only(['wire:target', 'wire:loading.class']) }} />

            {{-- confirm --}}
            <x-customer.buttons.btn
                x-on:click="methodConfirmed"
                prepend-icon="check-lg"
                text="{{ $buttonConfirm }}"
                flat
                small
                variant="{{ $variant }}"
                {{ $attributes->only(['wire:target', 'wire:click', 'wire:loading.class']) }} />
        </div>
    </div>
</div>
