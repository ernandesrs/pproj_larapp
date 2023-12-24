<form>
    <div class="flex flex-wrap">
        <div class="basis-full sm:basis-6/12 sm:pr-2">
            <div class="form-group">
                <label class="form-input-label sr-only" for="first_name">{{ __('words.first_name') }}</label>

                <input type="text" class="form-input" name="first_name" id="first_name"
                    placeholder="{{ __('words.first_name') }}" />
            </div>
        </div>

        <div class="basis-full sm:basis-6/12 sm:pl-2">
            <div class="form-group">
                <label class="form-input-label sr-only" for="last_name">{{ __('words.last_name') }}</label>

                <input type="text" class="form-input" name="last_name" id="last_name"
                    placeholder="{{ __('words.last_name') }}" />
            </div>
        </div>

        <div class="basis-full sm:basis-6/12 sm:pr-2">
            <div class="form-group">
                <label class="form-input-label sr-only" for="username">{{ __('words.username') }}</label>

                <input type="text" class="form-input" name="username" id="username"
                    placeholder="{{ __('words.username') }}" />
            </div>
        </div>

        <div class="basis-full sm:basis-6/12 sm:pl-2">
            <div class="form-group">
                <label class="form-input-label sr-only" for="gender">{{ __('words.gender') }}</label>

                <select class="form-input" name="gender" id="gender">
                    <option selected disabled>{{ __('words.gender') }}</option>
                    <option value="n">{{ __('words.undefined') }}</option>
                    <option value="m">{{ __('words.male') }}</option>
                    <option value="f">{{ __('words.female') }}</option>
                </select>
            </div>
        </div>

        <div class="basis-full">
            <div class="form-group">
                <label class="form-input-label sr-only" for="email">{{ __('words.email') }}</label>

                <input type="email" class="form-input" name="email" id="email"
                    placeholder="{{ __('words.email') }}" />
            </div>
        </div>

        <div class="basis-full sm:basis-6/12 sm:pr-2">
            <div class="form-group">
                <label class="form-input-label sr-only" for="password">{{ __('words.password') }}</label>

                <input type="password" class="form-input" name="password" id="password"
                    placeholder="{{ __('words.password') }}" />
            </div>
        </div>

        <div class="basis-full sm:basis-6/12 sm:pl-2">
            <div class="form-group">
                <label class="form-input-label sr-only"
                    for="password_confirmation">{{ __('words.password_confirmation') }}</label>

                <input type="password" class="form-input" name="password_confirmation" id="password_confirmation"
                    placeholder="{{ __('words.password_confirmation') }}" />
            </div>
        </div>
    </div>

    <x-front.button type="submit" text="{{ __('words.register_account') }}" variant="primary" full />
</form>
