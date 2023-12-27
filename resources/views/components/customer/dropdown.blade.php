@props([
    'size' => 'normal',
    'location' => 'left',
])

@php
    $sizes = [
        'small' => 'sm:w-[300px]',
        'normal' => 'sm:w-[400px]',
        'large' => 'sm:w-[500px]',
    ];
@endphp

<div
    x-data="{
        showDropdown: false,
    
        toggle() {
            this.showDropdown ? this.close() : this.show();
        },
        show() {
            this.showDropdown = true;
            this.clickOutMonitorAdd();
        },
        close() {
            this.showDropdown = false;
            this.clickOutMonitorRemove();
        },
        clickOutMonitorAdd() {
            document.addEventListener('click', this.clickOutHandler);
        },
        clickOutMonitorRemove() {
            document.removeEventListener('click', this.clickOutHandler);
        },
        clickOutHandler(event) {
            if ($el.contains(event.target)) {
                return;
            }
    
            $data.close();
        }
    }"
    class="relative">
    <div
        x-on:click="toggle"
        class="relative z-40">
        {{ $activator }}
    </div>

    <div
        x-show="showDropdown"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 -skew-x-3 translate-y-3/4 blur-sm z-30"
        x-transition:enter-end="opacity-100 skew-x-0 z-40"

        x-transition:leave="transition ease-out duration-100"
        x-transition:leave-start="opacity-100 skew-x-0 z-40"
        x-transition:leave-end="opacity-0 -skew-x-3 translate-y-3/4 blur-sm z-30"

        {{ $attributes->merge([
            'class' => implode(' ', [
                'absolute bottom-0 translate-y-full z-40 shadow-lg rounded-3xl overflow-hidden',
                $location == 'left' ? 'left-0' : 'right-0',
            ]),
        ]) }}
        style="display:none;">
        <div class="relative w-auto {{ $sizes[$size] }} bg-white p-6">
            {{ $content }}
        </div>
    </div>
</div>
