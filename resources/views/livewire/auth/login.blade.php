<form wire:submit="attemptLogin">

    <x-front.form-input wire:model.blur="email" type="email" label="Your e-mail" name="email" />

    <x-front.form-input wire:model.blur="password" type="password" label="Your password" name="password" />

    <x-front.button wire:loading.attr="disabled" type="submit" text="Sign in" variant="primary-outlined" full />

</form>
