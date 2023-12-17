@extends('auth.layouts.default', [
    'page' => [
        'title' => 'Login',
    ],
])

@section('content')
    <form>
        <div class="input-form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="E-mail">
        </div>
        <div class="input-form-group">
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" placeholder="Senha">
        </div>
    </form>
@endsection
