@props([
    'model' => null,
    'eachSide' => 3,
    'useCustom' => false,
])

@if ($model)
    @php
        $pages = $model->onEachSide($eachSide)->withQueryString();
    @endphp
    <div class="mt-6">
        @if ($useCustom)
            <nav
                class="w-full flex justify-center gap-1">
                @foreach ($pages->linkCollection() as $page)
                    <a
                        wire:navigate
                        href="{{ $page['url'] }}"
                        class="border border-admin-light-normal px-5 py-3 duration-300 {{ $page['active'] && $page['url'] ? 'bg-admin-primary-normal text-admin-light-light-2 pointer-events-none' : '' }} {{ !$page['url'] ? 'pointer-events-none' : '' }} hover:bg-admin-light-light-1 hover:shadow">
                        {{ $page['label'] }}
                    </a>
                @endforeach
            </nav>
        @else
            {{ $pages->links() }}
        @endif
    </div>
@endif
