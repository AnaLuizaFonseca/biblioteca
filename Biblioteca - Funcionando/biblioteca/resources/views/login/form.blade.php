<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <form action="{{ route('login.auth') }}" method="POST">
    @csrf
    <div class="container">
        <div class="text-container">
        <h1 class="text">Biblioteca Inteligente</h1>
        <div class="input-container">
            <input type="email" name="email" class="input"> <br>
            <input type="password" name="senha" class="input"> <br>
        </div>
            @if($errors->any())
            @foreach($errors->all() as $error)
            {{$error}} <br>
            @endforeach
            @endif
        <div class="button-container">
            <button type="submit"> Entrar </button>
        </div>
            <p class="senha">Esqueceu sua senha?</p>
            <a href="cadastro">Cadastre-se</a>
        </div>
    </div>
    </form>
</body>
</html>