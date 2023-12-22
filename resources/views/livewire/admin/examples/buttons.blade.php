<x-admin.page icon='pie-chart-fill' title="Buttons" subtitle="See several sample buttons" :breadcrumbs="[['text' => 'Buttons', 'href' => route('admin.examples.buttons')]]">
    @slot('content')
        <div class="flex flex-wrap gap-y-8">

            <x-admin.section header-icon='pie-chart' title="Primary buttons"
                subtitle="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo facere magni rem.">
                @slot('content')
                    <div class="flex flex-wrap items-center gap-x-3 gap-y-5">
                        <x-common.button text='Filled small' variant='primary' small />
                        <x-common.button text='Outlined small' variant='primary-outlined' small />
                        <x-common.button text='Link small' variant='primary-link' small />

                        <x-common.button text='Filled normal' variant='primary' />
                        <x-common.button text='Outlined normal' variant='primary-outlined' />
                        <x-common.button text='Link normal' variant='primary-link' />

                        <x-common.button text='Filled large' variant='primary' large />
                        <x-common.button text='Outlined large' variant='primary-outlined' large />
                        <x-common.button text='Link large' variant='primary-link' large />

                        <x-common.button text='With prepend icon' variant='primary' prepend-icon='arrow-left' />
                        <x-common.button text='With append icon' variant='primary' append-icon='arrow-right' />
                        <x-common.button text='With two icon' variant='primary' prepend-icon='arrow-left'
                            append-icon='arrow-right' />

                        <x-common.button text='Loading button' variant='primary' prepend-icon='arrow-right' loading />
                        <x-common.button as="link" href="#" text='Loading link' variant='primary'
                            prepend-icon='arrow-right' loading />
                    </div>
                @endslot

                @slot('actions')
                    <x-common.button as="link" href="" text='With prepend icon' variant='primary-link' small
                        append-icon='arrow-right' />
                @endslot
            </x-admin.section>

            <x-admin.section title="Secondary buttons"
                subtitle="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo facere magni rem.">
                @slot('content')
                    <div class="flex flex-wrap items-center gap-x-3 gap-y-5">
                        <x-common.button text='Filled small' variant='secondary' small />
                        <x-common.button text='Outlined small' variant='secondary-outlined' small />
                        <x-common.button text='Link small' variant='secondary-link' small />

                        <x-common.button text='Filled normal' variant='secondary' />
                        <x-common.button text='Outlined normal' variant='secondary-outlined' />
                        <x-common.button text='Link normal' variant='secondary-link' />

                        <x-common.button text='Filled large' variant='secondary' large />
                        <x-common.button text='Outlined large' variant='secondary-outlined' large />
                        <x-common.button text='Link large' variant='secondary-link' large />

                        <x-common.button text='With prepend icon' variant='secondary' prepend-icon='arrow-left' />
                        <x-common.button text='With append icon' variant='secondary' append-icon='arrow-right' />
                        <x-common.button text='With two icon' variant='secondary' prepend-icon='arrow-left'
                            append-icon='arrow-right' />
                    </div>
                @endslot
            </x-admin.section>

            <x-admin.section title="Success buttons"
                subtitle="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo facere magni rem.">
                @slot('content')
                    <div class="flex flex-wrap items-center gap-x-3 gap-y-5">
                        <x-common.button text='Filled small' variant='success' small />
                        <x-common.button text='Outlined small' variant='success-outlined' small />
                        <x-common.button text='Link small' variant='success-link' small />

                        <x-common.button text='Filled normal' variant='success' />
                        <x-common.button text='Outlined normal' variant='success-outlined' />
                        <x-common.button text='Link normal' variant='success-link' />

                        <x-common.button text='Filled large' variant='success' large />
                        <x-common.button text='Outlined large' variant='success-outlined' large />
                        <x-common.button text='Link large' variant='success-link' large />

                        <x-common.button text='With prepend icon' variant='success' prepend-icon='arrow-left' />
                        <x-common.button text='With append icon' variant='success' append-icon='arrow-right' />
                        <x-common.button text='With two icon' variant='success' prepend-icon='arrow-left'
                            append-icon='arrow-right' />
                    </div>
                @endslot
            </x-admin.section>

            <x-admin.section title="Info buttons"
                subtitle="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo facere magni rem.">
                @slot('content')
                    <div class="flex flex-wrap items-center gap-x-3 gap-y-5">
                        <x-common.button text='Filled small' variant='info' small />
                        <x-common.button text='Outlined small' variant='info-outlined' small />
                        <x-common.button text='Link small' variant='info-link' small />

                        <x-common.button text='Filled normal' variant='info' />
                        <x-common.button text='Outlined normal' variant='info-outlined' />
                        <x-common.button text='Link normal' variant='info-link' />

                        <x-common.button text='Filled large' variant='info' large />
                        <x-common.button text='Outlined large' variant='info-outlined' large />
                        <x-common.button text='Link large' variant='info-link' large />

                        <x-common.button text='With prepend icon' variant='info' prepend-icon='arrow-left' />
                        <x-common.button text='With append icon' variant='info' append-icon='arrow-right' />
                        <x-common.button text='With two icon' variant='info' prepend-icon='arrow-left'
                            append-icon='arrow-right' />
                    </div>
                @endslot
            </x-admin.section>

            <x-admin.section title="Danger buttons"
                subtitle="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo facere magni rem.">
                @slot('content')
                    <div class="flex flex-wrap items-center gap-x-3 gap-y-5">
                        <x-common.button text='Filled small' variant='danger' small />
                        <x-common.button text='Outlined small' variant='danger-outlined' small />
                        <x-common.button text='Link small' variant='danger-link' small />

                        <x-common.button text='Filled normal' variant='danger' />
                        <x-common.button text='Outlined normal' variant='danger-outlined' />
                        <x-common.button text='Link normal' variant='danger-link' />

                        <x-common.button text='Filled large' variant='danger' large />
                        <x-common.button text='Outlined large' variant='danger-outlined' large />
                        <x-common.button text='Link large' variant='danger-link' large />

                        <x-common.button text='With prepend icon' variant='danger' prepend-icon='arrow-left' />
                        <x-common.button text='With append icon' variant='danger' append-icon='arrow-right' />
                        <x-common.button text='With two icon' variant='danger' prepend-icon='arrow-left'
                            append-icon='arrow-right' />
                    </div>
                @endslot
            </x-admin.section>

            <x-admin.section title="Links"
                subtitle="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo facere magni rem.">
                @slot('content')
                    <div class="flex flex-wrap items-center gap-x-3 gap-y-5">
                        <x-common.button as="link" text='Link to Google' variant='primary' href="https://google.com"
                            title="Go to Google" target="_blank" />

                        <x-common.button as="link" text='Outlined normal with icon' variant='primary-outlined'
                            prepend-icon="box-arrow-up-right" href="https://google.com" title="Go to Google"
                            target="_blank" />

                        <x-common.button as="link" text='Internal link: go to home' variant='primary-link'
                            href="{{ route('admin.index') }}" title="Go to home" wire:navigate />
                    </div>
                @endslot
            </x-admin.section>
        </div>
    @endslot
</x-admin.page>
