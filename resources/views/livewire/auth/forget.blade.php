<form>
    <div class="form-group">
        <label class="form-input-label sr-only" for="email">{{ __('words.email') }}</label>

        <input type="email" class="form-input" id="email" name="email"
            placeholder="{{ __('phrases.enter_registered_email') }}" />
    </div>

    <x-front.button type="submit" text="{{ __('words.recovery_now') }}" variant="primary" full />
</form>
