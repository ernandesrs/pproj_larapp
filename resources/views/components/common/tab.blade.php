@props(['tabs', 'borderless'])

@php

    $borderless = $borderless ?? false;
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
        'showedId' => $activeId,
        'showedContentId' => 'tab_content_' . $activeId,
    ]) }},

    tabChange(event) {
        const localName = event.target.localName;
        const contentId = localName == 'select' ? event.target.value : event.target.getAttribute('id');

        if (contentId == this.showedId) {
            return;
        }

        // old content to hidden
        $el.querySelector('#' + this.showedId).classList.remove('tab_link_active');
        $el.querySelector('#' + this.showedContentId).classList.add('hidden');

        // new content to show
        $el.querySelector('#' + contentId).classList.add('tab_link_active');
        $el.querySelector('#tab_content_' + contentId).classList.remove('hidden');

        this.showedId = contentId;
        this.showedContentId = 'tab_content_' + contentId;
    }
}" class="tab {{ $borderless ? 'tab-borderless' : '' }}">
    {{-- mobile tabs --}}
    <div class="tab_links_mobile">
        <label for="tabs_{{ $id }}" class="sr-only">Tab</label>

        <select x-on:change="tabChange" id="tabs_{{ $id }}" x-model="showedId"
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
    <div class="tab_contents">
        @foreach ($tabs as $key => $tab)
            @php
                $slotName = 'content' . ($key + 1);
            @endphp
            <div class="tab_content {{ $tab['active'] ? '' : 'hidden' }}" id="tab_content_{{ $tab['id'] }}">
                {{ $$slotName }}
            </div>
        @endforeach
    </div>
</div>
