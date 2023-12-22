@props(['tabs', 'borderless'])

@php

    $borderless = $borderless ?? false;
    $tabsId = $_GET['tabs'] ?? uniqid();
    $activeTabId = $_GET['tab'] ?? null;

    $tabs = array_map(function ($tab) use ($tabsId, &$activeTabId) {
        $fullTabId = \Str::slug($tab['text'], '_') . '_' . $tabsId;

        $activeTabId = $activeTabId ? $activeTabId : ($tab['active'] ?? false ? $fullTabId : null);

        return [...$tab, 'id' => $fullTabId, 'active' => $activeTabId ? ($activeTabId == $fullTabId ? true : false) : $tab['active'] ?? false];
    }, $tabs ?? []);

    if (!$activeTabId && count($tabs) > 0) {
        $tabs[0]['active'] = true;
        $activeTabId = $tabs[0]['id'];
    }

@endphp

<div x-data="{
    ...{{ json_encode([
        'tabsId' => $tabsId,
        'activeTabId' => $activeTabId,
        'activeTabContentId' => 'tab_content_' . $activeTabId,
    ]) }},

    toggleTab(event) {
        this.activeTabId = event.target.getAttribute('id');
        this.activeTabContentId = 'tab_content_' + event.target.getAttribute('id');
    }
}" class="tab {{ $borderless ? 'tab-borderless' : '' }}">
    {{-- mobile tabs --}}
    <div class="tab_links_mobile">
        <label for="tabs_{{ $tabsId }}" class="sr-only">Tab</label>

        <select x-on:change="toggleTab" id="tabs_{{ $tabsId }}" x-model="activeTabId"
            class="w-full rounded-md border-gray-200">
            @foreach ($tabs as $key => $tab)
                <option {{ $tab['active'] ? 'selected' : '' }} value="{{ $tab['id'] }}">{{ $tab['text'] }}</option>
            @endforeach
        </select>
    </div>

    {{-- desktop tabs --}}
    <div class="tab_links">
        <div class="tab_links_inner">
            <nav class="tab_links_nav" aria-label="Tabs">
                @foreach ($tabs as $tab)
                    <a x-on:click.prevent="toggleTab" id="{{ $tab['id'] }}" href="#"
                        :class="['tab_link', ($el.getAttribute('id') == activeTabId) ? 'tab_link_active' : '']">
                        <i class="bi bi-{{ $tab['icon'] ?? null }}"></i>
                        <span>{{ $tab['text'] }}</span>
                    </a>
                @endforeach
            </nav>
        </div>
    </div>

    {{-- tabs content --}}
    <div class="tab_contents">
        @foreach ($tabs as $key => $tab)
            @php
                $slotName = 'content' . ($key + 1);
            @endphp
            <div x-show="$el.getAttribute('id') == activeTabContentId" class="tab_content"
                id="tab_content_{{ $tab['id'] }}" style="display:none;">
                {{ $$slotName }}
            </div>
        @endforeach
    </div>
</div>
