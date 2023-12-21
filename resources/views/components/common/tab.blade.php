@props(['tabs'])

@php

    $id = uniqid();
    $activeId = null;
    $tabs = array_map(function ($tab) use ($id, &$activeId) {
        $fId = \Str::slug($tab['text'], '_') . '_' . $id;

        $activeId = $tab['active'] ?? false ? $fId : null;

        return [...$tab, 'id' => $fId, 'active' => $tab['active'] ?? false];
    }, $tabs ?? []);

    if (!$activeId && count($tabs) > 0) {
        $tabs[0]['active'] = true;
        $activeId = $tabs[0]['id'];
    }

@endphp

<div x-data="{
    ...{{ json_encode([
        'activeId' => $activeId,
    ]) }},

    tabChange(event) {
        const localName = event.target.localName;
        const contentId = localName == 'select' ? event.target.value : event.target.getAttribute('id');

        console.log(contentId);
    }
}">
    {{-- mobile tabs --}}
    <div class="sm:hidden">
        <label for="tabs_{{ $id }}" class="sr-only">Tab</label>

        <select x-on:change="tabChange" id="tabs_{{ $id }}" class="w-full rounded-md border-gray-200">
            @foreach ($tabs as $key => $tab)
                <option {{ $tab['active'] ? 'selected' : '' }} value="{{ $tab['id'] }}">{{ $tab['text'] }}</option>
            @endforeach
        </select>
    </div>

    {{-- desktop tabs --}}
    <div class="hidden sm:block">
        <div class="border-b border-gray-200">
            <nav class="-mb-px flex gap-6" aria-label="Tabs">
                @foreach ($tabs as $key => $tab)
                    <a x-on:click="tabChange" id="{{ $tab['id'] }}" href="#"
                        class="tab_link {{ $tab['active'] ? 'tab_link_active' : '' }}">
                        <i class="bi bi-{{ $tab['icon'] ?? null }}"></i>

                        <span>{{ $tab['text'] }}</span>
                    </a>
                @endforeach
            </nav>
        </div>
    </div>

    {{-- tabs content --}}
    <div>
        @foreach ($tabs as $key => $tab)
            @php
                $slotName = 'content' . ($key + 1);
            @endphp
            <div class="{{ $tab['active'] ? '' : 'hidden' }}" id="tab_content_{{ $tab['id'] }}">
                {{ $$slotName }}
            </div>
        @endforeach
    </div>
</div>
