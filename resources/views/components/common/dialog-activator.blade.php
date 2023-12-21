@props(['controls'])

@php
    if (!($controls ?? null)) {
        throw new \Exception("Needs 'controls' prop, must contain id of the dialog that the activator controls");
    }
@endphp

<div x-data="{
    ...{{ json_encode(['controls' => $controls]) }},

    activatorClicked() {
        $dispatch('alert_activator_clicked', {
            controls: this.controls
        });
    }
}">
    <div x-on:click="activatorClicked">
        {{ $activator }}
    </div>
</div>
