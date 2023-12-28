@props([
    'showActionCreate' => false,
    'actionCreate' => [
        'variant' => 'light',
        'icon' => 'plus-lg',
        'text' => __('words.create') . ' ' . __('words.new'),
        'href' => null,
    ],
])
<div class="flex items-center relative rounded-full">
    {{ $slot }}

    @if ($showActionCreate ? ($create = $actionCreate) : false)
        <x-customer.buttons.btn
            as="{{ $create['href'] ?? null ? 'link' : 'button' }}"
            prepend-icon="{{ $create['icon'] }}"
            text="{{ $create['text'] }}"
            variant="{{ $create['variant'] }}"
            flat
            class="{{ $slot->isEmpty() ? '' : 'rounded-none rounded-tr-full rounded-br-full' }}" />
    @endif
</div>
