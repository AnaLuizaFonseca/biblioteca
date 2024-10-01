<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Novo Aluno</title>
    <link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
</head>
<body>
    <div class="container">
        <div class="text-container">
        <h1 class="text">Biblioteca Inteligente</h1>
        <form method="POST" action="{{ route('alunos.store') }}">
            @csrf
            <div class="input-container">
            <div class="input-group">
                <label for="nome"></label>
                <input type="text" name="nome" id="nome" required placeholder="Nome Completo" class="input">
            </div>

            <div class="input-group">
                <label for="email"></label>
                <input type="email" name="email" id="email" required placeholder="E-mail" class="input">
            </div>

            <div class="input-group">
                <label for="senha"></label>
                <input type="password" name="senha" id="senha" required placeholder="Senha" class="input">
            </div>

            <div class="input-group">
                <label for="senha_confirmation"></label>
                <input type="password" name="senha_confirmation" id="senha_confirmation" required placeholder="Repita sua senha" class="input">
            </div>
            </div>

            <div class="button-container">
                <button type="submit">Cadastrar</button>
            </div>
        </form>
        </div>
    </div>
</body>
</html>