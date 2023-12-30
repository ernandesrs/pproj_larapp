@props([
    'read' => false,
    'icon' => 'bell',
    'text' => 'Notification text via prop text',
    'action' => null,
    'showDelete' => false,
])

<div
    class="bg-customer-light-light-1 {{ $read ? 'opacity-75' : '' }} px-4 py-3 duration-300 flex items-start text-customer-dark-light-2 !text-opacity-60 cursor-default mb-2 rounded-xl {{ $read ? '' : 'hover:bg-customer-light-normal' }}">

    <x-customer.icon icon="{{ $icon }}"
        class="text-2xl lg:text-3xl mr-4" />

    <div class="">
        <p class="mb-2">{!! $text !!}</p>

        @if ($action)
            <div class="text-left">
                @if ($action['external'] ?? false)
                    <a class="font-semibold text-sm text-customer-dark-light-2 opacity-60 hover:opacity-90 duration-300 inline-block"
                        href="{{ $action['href'] }}"
                        target="_{{ $action['external'] ?? null ? 'blank' : 'self' }}">
                        {{ $action['text'] }}
                    </a>
                @else
                    <a wire:navigate
                        class="font-semibold text-sm text-customer-dark-light-2 opacity-60 hover:opacity-90 duration-300 inline-block"
                        href="{{ $action['href'] }}"
                        target="_{{ $action['external'] ?? null ? 'blank' : 'self' }}">
                        {{ $action['text'] }}
                    </a>
                @endif
            </div>
        @endif
    </div>

    <div class="pl-3 flex flex-col justify-center gap-y-2 ml-auto">
        <x-customer.buttons.btn prepend-icon="check-lg" variant="light" link small />
        @if ($showDelete)
            <x-customer.buttons.btn prepend-icon="trash3-fill" variant="light" link small />
        @endif
    </div>
</div>
