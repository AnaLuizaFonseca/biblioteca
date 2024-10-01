<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/tab.css') }}">
    <title>Document</title>
</head>
<body>
<table class="tabela">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            </tr>
    </thead>
    <tbody>
        @foreach ($alunos as $aluno)
            <tr>
                <td>{{ $aluno->nome }}</td>
                <td>{{ $aluno->email }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>