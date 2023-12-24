<form wire:submit.prevent="login">

    <x-front.form-input wire:model.blur="email" type="email" label="{{ __('words.email') }}" name="email" />

    <x-front.form-input wire:model="password" type="password" label="{{ __('words.password') }}" name="password" />

    <x-front.button type="submit" text="{{ __('words.login') }}" variant="primary" full />

</form>
