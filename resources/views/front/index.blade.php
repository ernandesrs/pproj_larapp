@extends('front.layouts.default', [
    'page' => [
        'title' => 'Página inicial',
    ],
])

@section('content')
    <div class="grid h-screen place-content-center bg-white px-4">
        <div class="text-center">
            <h1 class="text-4xl sm:text-6xl md:text-9xl font-black text-gray-200">
                {{ strtoupper(config('app.name')) }}
            </h1>

            <div class="py-5">
                <p class="text-xl sm:text-2xl md:text-4xl font-bold tracking-tight text-gray-900">
                    Wellcome to {{ config('app.name') }}!
                </p>
                <p class="mt-4 text-gray-500">
                    What do you want to do?
                </p>
            </div>

            <div class="py-5 flex gap-x-2 justify-center">
                @auth
                    <x-front.button as="link" href="{{ route('customer.index') }}" text="Customer Dashboard"
                        variant="primary" />
                    <x-front.button as="link" href="{{ route('admin.index') }}" text="Admin Dashboard"
                        variant="primary-outlined" />
                    <x-front.button as="link" href="{{ route('auth.logout') }}" text="Logout" variant="danger-link" />
                @endauth
                @guest
                    <x-front.button as="link" text="Access account" variant="primary" href="{{ route('auth.login') }}" />
                    <x-front.button as="link" text="Create account" variant="primary-outlined"
                        href="{{ route('auth.register') }}" />
                @endguest
            </div>
        </div>
    </div>
@endsection
