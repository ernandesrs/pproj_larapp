<a
    wire:navigate
    class="text-xl font-normal"
    href="{{ route('admin.index') }}">
    <div {{ $attributes->merge(['class' => '']) }}>
        <img src="{{ asset('assets/img/admin/logo_light.png') }}" alt="{{ config('app.name') }}">
    </div>
</a>
