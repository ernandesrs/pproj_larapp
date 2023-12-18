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

            <div>
                {{ $slot }}
            </div>

            <div class="py-4">
                @if (in_array(Route::currentRouteName(), ['auth.login', 'auth.login']))
                    <p class="text-center text-sm text-gray-500">
                        No account?
                        <a class="underline" href="{{ route('auth.register') }}">Sign up</a>
                    </p>
                    <p class="text-center text-sm text-gray-500">
                        Forgot your password?
                        <a class="underline" href="{{ route('auth.forget') }}">Recovery now</a>
                    </p>
                @elseif (in_array(Route::currentRouteName(), ['auth.register', 'auth.forget']))
                    <p class="text-center text-sm text-gray-500">
                        Have a account?
                        <a class="underline" href="{{ route('auth.login') }}">Sign in</a>
                    </p>
                @endif
            </div>
        </div>

    </main>

</body>

</html>
