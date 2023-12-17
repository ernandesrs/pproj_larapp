@extends('auth.layouts.default', [
    'page' => [
        'title' => 'Login',
    ],
])

@section('content')
    <div class="p-2 sm:p-4 md:p-8">
        <form method="post">
            <div class="form-group">
                <label class="form-input-label" for="email">E-mail</label>
                <input class="form-input" type="email" name="email" id="email" placeholder="E-mail">
            </div>
            <div class="form-group">
                <label class="form-input-label" for="password">Senha</label>
                <input class="form-input" type="password" name="password" id="password" placeholder="Senha">
            </div>

            <div class="flex justify-center my-5">
                <button class="button button-main">
                    Fazer login
                </button>
            </div>

            <div class="flex justify-center mt-2 py-2 border-t">
                <a class="button button-main-link" href="">
                    Esquecia a senha
                </a>
                <a class="button button-main-link" href="">
                    Cadastrar
                </a>
            </div>
        </form>
    </div>
@endsection
