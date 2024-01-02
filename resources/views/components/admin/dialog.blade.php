@props([
    'show' => false,
    'id' => null,
    'title' => null,
    'persistent' => false,
    'hiddenClose' => false,
])

@php
    if (empty($id)) {
        throw new \Exception('Need a value for id prop, the value will be used to bind the dialog to the activator.');
    } else {
        $attributes = $attributes->merge(['id' => $id]);
    }
@endphp

{{-- dialog wrapper --}}
<div
    x-data="{
        ...{{ json_encode([
            'show' => $show,
            'showDialog' => false,
            'persistent' => $persistent,
        ]) }},
    
        init() {
            if (this.show) {
                $nextTick(() => {
                    this.showDialog = true;
                });
            }
        },
        activatorClicked(e) {
            if (e.detail?.target !== $el.getAttribute('id')) {
                return;
            }
    
            this.methodShow();
        },
        wrapperClicked(e) {
            if (e.target !== $el || this.persistent) {
                return;
            }
    
            this.methodClose();
        },
        closeClicked() {
            this.methodClose();
        },
        methodShow() {
            this.showDialog = this.show = true;
        },
        methodClose() {
            this.showDialog = this.show = false;
        }
    }"

    x-show="showDialog"
    x-transition:enter="transition ease-in-out duration-200"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"

    x-transition:leave="transition ease-out duration-500"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"

    x-on:activator_clicked.window="activatorClicked"
    x-on:click="wrapperClicked"

    class="w-screen h-screen bg-admin-dark-normal bg-opacity-50 fixed top-0 left-0 z-50 p-4 dark:bg-opacity-75"
    style="display: none" {{ $attributes->only(['id']) }}>

    {{-- dialog --}}
    <div
        x-show="showDialog"
        x-transition:enter="transition ease-in-out duration-300"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"

        x-transition:leave="transition ease-out duration-200"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90"

        class="w-full max-w-lg bg-admin-light-normal border-admin-light-dark-2 rounded-sm mx-auto shadow-lg dark:bg-admin-dark-light-1">

        {{-- header --}}
        @if (($header ?? null) || $title)
            <div class="px-6 pt-4">
                @if ($header ?? null)
                    {{ $header }}
                @else
                    <h5 class="text-admin-dark-light-2 font-medium lg:font-semibold text-lg lg:text-xl dark:text-admin-light-normal">
                        {{ $title }}</h5>
                @endif
            </div>
        @endif

        {{-- body --}}
        <div class="px-6 py-4">
            {{ $slot }}
        </div>

        {{-- footer --}}
        @if (($footer ?? null) || !$hiddenClose)
            <div
                class="flex justify-between items-center px-6 py-4 border-t border-admin-light-dark-1 dark:border-admin-dark-light-2">
                {{ $footer ?? null }}

                @if (!$hiddenClose)
                    <x-admin.buttons.clickable
                        x-on:click="closeClicked"
                        class="ml-auto"
                        prepend-icon="x-lg"
                        text="{{ __('words.close') }}"
                        link
                        no-transform
                        variant="danger"
                        sm />
                @endif
            </div>
        @endif

    </div>

</div>
