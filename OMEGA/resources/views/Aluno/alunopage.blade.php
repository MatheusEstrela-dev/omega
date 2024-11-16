<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina do Aluno</title>
</head>
<body>
    <h2>Pagina Do Aluno</h2>
    <h1>Bem-vindo, Aluno: {{ Session::get('user_name') }}</h1>
<a href="/logout">Sair</a>
</body>
</html>
