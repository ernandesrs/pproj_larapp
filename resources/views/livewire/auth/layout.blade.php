<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }} - {{ $title ?? 'Page Title' }}</title>

    @vite(['resources/js/auth/app.js', 'resources/css/auth/app.css'])
</head>

<body>

    <main class="w-full min-h-screen flex justify-center items-center">
        <div class="w-full max-w-lg shadow-lg p-6 sm:p-10 border border-front-light-normal rounded">
            <div class="mb-4">
                <h1 class="text-center text-2xl font-bold text-front-primary-normal sm:text-3xl">
                    {{ $title }}
                </h1>

                @isset($subtitle)
                    <p class="mx-auto mt-4 max-w-md text-center text-gray-500">
                        {{ $subtitle }}
                    </p>
                @endisset
            </div>

            @if ($error = session('error'))
                <div
                    class="text-front-danger-dark-1 text-center border border-front-danger-normal py-3 px-4 rounded mb-5">
                    {{ $error }}
                </div>
            @endif

            <div>
                {{ $slot }}
            </div>

            <div class="py-4">
                @if (in_array(Route::currentRouteName(), ['auth.login', 'auth.login']))
                    <p class="text-center text-sm text-gray-500">
                        {{ __('phrases.no_account') }}?
                        <a class="underline" href="{{ route('auth.register') }}">{{ __('words.register_account') }}.</a>
                    </p>
                    <p class="text-center text-sm text-gray-500">
                        {{ __('phrases.forgot_password') }}?
                        <a class="underline" href="{{ route('auth.forget') }}">{{ __('words.recovery_now') }}.</a>
                    </p>
                @elseif (in_array(Route::currentRouteName(), ['auth.register', 'auth.forget']))
                    <p class="text-center text-sm text-gray-500">
                        {{ __(Route::currentRouteName() == 'auth.forget' ? 'phrases.remember_password' : 'phrases.have_account') }}?
                        <a class="underline" href="{{ route('auth.login') }}">{{ __('words.login_now') }}.</a>
                    </p>
                @endif
            </div>
        </div>

    </main>

</body>

</html>
