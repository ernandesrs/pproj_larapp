<div class="flex flex-wrap gap-y-8">
    <div class="basis-full sm:basis-6/12 pr-4">
        <x-admin.section title="Section component" subtitle="Default section component">
            @slot('content')
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque, reiciendis consequatur ad
                    consectetur
                    sequi dolores nihil possimus aliquid ut consequuntur earum dolorum ipsa, pariatur aperiam labore
                    doloribus iusto aut voluptas.</p>
            @endslot
        </x-admin.section>
    </div>

    <div class="basis-full sm:basis-6/12 pl-4">
        <x-admin.section header-icon='pie-chart' title="Section component" subtitle="Section component with header icon">
            @slot('content')
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque, reiciendis consequatur ad
                    consectetur
                    sequi dolores nihil possimus aliquid ut consequuntur earum dolorum ipsa, pariatur aperiam labore
                    doloribus iusto aut voluptas.</p>
            @endslot
        </x-admin.section>
    </div>
</div>
