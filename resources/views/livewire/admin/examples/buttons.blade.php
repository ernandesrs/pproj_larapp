<div class="flex flex-wrap gap-y-8">

    <div>
        <h1 class="text-xl mb-5">Primary buttons</h1>
        <div class="flex flex-wrap justify-center items-center gap-x-3 gap-y-5">
            <x-admin.button text='Filled small' variant='primary' small />
            <x-admin.button text='Outlined small' variant='primary-outlined' small />
            <x-admin.button text='Link small' variant='primary-link' small />

            <x-admin.button text='Filled normal' variant='primary' />
            <x-admin.button text='Outlined normal' variant='primary-outlined' />
            <x-admin.button text='Link normal' variant='primary-link' />

            <x-admin.button text='Filled large' variant='primary' large />
            <x-admin.button text='Outlined large' variant='primary-outlined' large />
            <x-admin.button text='Link large' variant='primary-link' large />

            <x-admin.button text='With prepend icon' variant='primary' prepend-icon='arrow-left' />
            <x-admin.button text='With append icon' variant='primary' append-icon='arrow-right' />
            <x-admin.button text='With two icon' variant='primary' prepend-icon='arrow-left'
                append-icon='arrow-right' />
        </div>
    </div>

    <div>
        <h1 class="text-xl mb-5">Secondary buttons</h1>
        <div class="flex flex-wrap justify-center items-center gap-x-3 gap-y-5">
            <x-admin.button text='Filled small' variant='secondary' small />
            <x-admin.button text='Outlined small' variant='secondary-outlined' small />
            <x-admin.button text='Link small' variant='secondary-link' small />

            <x-admin.button text='Filled normal' variant='secondary' />
            <x-admin.button text='Outlined normal' variant='secondary-outlined' />
            <x-admin.button text='Link normal' variant='secondary-link' />

            <x-admin.button text='Filled large' variant='secondary' large />
            <x-admin.button text='Outlined large' variant='secondary-outlined' large />
            <x-admin.button text='Link large' variant='secondary-link' large />

            <x-admin.button text='With prepend icon' variant='secondary' prepend-icon='arrow-left' />
            <x-admin.button text='With append icon' variant='secondary' append-icon='arrow-right' />
            <x-admin.button text='With two icon' variant='secondary' prepend-icon='arrow-left'
                append-icon='arrow-right' />
        </div>
    </div>

    <div>
        <h1 class="text-xl mb-5">Success buttons</h1>
        <div class="flex flex-wrap justify-center items-center gap-x-3 gap-y-5">
            <x-admin.button text='Filled small' variant='success' small />
            <x-admin.button text='Outlined small' variant='success-outlined' small />
            <x-admin.button text='Link small' variant='success-link' small />

            <x-admin.button text='Filled normal' variant='success' />
            <x-admin.button text='Outlined normal' variant='success-outlined' />
            <x-admin.button text='Link normal' variant='success-link' />

            <x-admin.button text='Filled large' variant='success' large />
            <x-admin.button text='Outlined large' variant='success-outlined' large />
            <x-admin.button text='Link large' variant='success-link' large />

            <x-admin.button text='With prepend icon' variant='success' prepend-icon='arrow-left' />
            <x-admin.button text='With append icon' variant='success' append-icon='arrow-right' />
            <x-admin.button text='With two icon' variant='success' prepend-icon='arrow-left'
                append-icon='arrow-right' />
        </div>
    </div>

    <div>
        <h1 class="text-xl mb-5">Info buttons</h1>
        <div class="flex flex-wrap justify-center items-center gap-x-3 gap-y-5">
            <x-admin.button text='Filled small' variant='info' small />
            <x-admin.button text='Outlined small' variant='info-outlined' small />
            <x-admin.button text='Link small' variant='info-link' small />

            <x-admin.button text='Filled normal' variant='info' />
            <x-admin.button text='Outlined normal' variant='info-outlined' />
            <x-admin.button text='Link normal' variant='info-link' />

            <x-admin.button text='Filled large' variant='info' large />
            <x-admin.button text='Outlined large' variant='info-outlined' large />
            <x-admin.button text='Link large' variant='info-link' large />

            <x-admin.button text='With prepend icon' variant='info' prepend-icon='arrow-left' />
            <x-admin.button text='With append icon' variant='info' append-icon='arrow-right' />
            <x-admin.button text='With two icon' variant='info' prepend-icon='arrow-left'
                append-icon='arrow-right' />
        </div>
    </div>

    <div>
        <h1 class="text-xl mb-5">Danger buttons</h1>
        <div class="flex flex-wrap justify-center items-center gap-x-3 gap-y-5">
            <x-admin.button text='Filled small' variant='danger' small />
            <x-admin.button text='Outlined small' variant='danger-outlined' small />
            <x-admin.button text='Link small' variant='danger-link' small />

            <x-admin.button text='Filled normal' variant='danger' />
            <x-admin.button text='Outlined normal' variant='danger-outlined' />
            <x-admin.button text='Link normal' variant='danger-link' />

            <x-admin.button text='Filled large' variant='danger' large />
            <x-admin.button text='Outlined large' variant='danger-outlined' large />
            <x-admin.button text='Link large' variant='danger-link' large />

            <x-admin.button text='With prepend icon' variant='danger' prepend-icon='arrow-left' />
            <x-admin.button text='With append icon' variant='danger' append-icon='arrow-right' />
            <x-admin.button text='With two icon' variant='danger' prepend-icon='arrow-left'
                append-icon='arrow-right' />
        </div>
    </div>

    <div>
        <h1 class="text-xl mb-5">Links</h1>
        <div class="flex flex-wrap justify-center items-center gap-x-3 gap-y-5">
            <x-admin.button as="link" text='Link to Google' variant='primary' href="https://google.com"
                title="Go to Google" target="_blank" />

            <x-admin.button as="link" text='Outlined normal with icon' variant='primary-outlined'
                prepend-icon="box-arrow-up-right" href="https://google.com" title="Go to Google" target="_blank" />

            <x-admin.button as="link" text='Internal link: go to home' variant='primary-link'
                href="{{ route('admin.index') }}" title="Go to home" wire:navigate />
        </div>
    </div>
</div>
