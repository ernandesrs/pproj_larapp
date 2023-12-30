@props([
    'title' => 'Title via prop title',
    'showActions' => false,
    'showActionCreate' => false,
    'actionCreate' => [],
])

<div class="bg-customer-white px-8 py-8 rounded-3xl border border-customer-light-dark-1 flex-1">

    {{-- page head --}}
    <div class="flex items-center mb-10">
        <div>
            <x-customer.h1 text="{{ $title }}" class="!mb-0" />
        </div>

        <div class="flex items-center gap-2 ml-auto">
            {{-- page actions --}}
            @if ($showActions)
                <x-customer.partials.page-actions
                    :show-action-create="$showActionCreate"
                    :action-create="$actionCreate">
                    {{ $actions ?? null }}
                </x-customer.partials.page-actions>
            @endif
        </div>
    </div>

    {{-- page content --}}
    <div class="">
        {{ $slot }}
    </div>

</div>
