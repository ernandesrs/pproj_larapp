@props([])

<div class="flex gap-1">
    <x-common.button text="" prepend-icon="pencil-square" variant="info-link" small />

    <x-common.dialog-activator controls="list_delete_item_confirmation">
        <x-slot name="activator">
            <x-common.button text="" prepend-icon="trash3-fill" variant="danger-link" small />
        </x-slot>
    </x-common.dialog-activator>
</div>
