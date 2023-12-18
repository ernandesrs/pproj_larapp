<form wire:submit.prevent="login">

    <x-front.form-input wire:model.blur="email" type="email" label="Your e-mail" name="email" />

    <x-front.form-input wire:model="password" type="password" label="Your password" name="password" />

    <x-front.button type="submit" text="Sign in" variant="primary-outlined" full />

</form>
