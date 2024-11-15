<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="CRUD Application">
    <meta name="keywords" content="crud, application">
    <title>Pagina do Admin</title>
    <link rel="stylesheet" href="{{asset('style.css') }}">
    <link rel="icon" href="{{asset('favicon.ico') }}">
</head>
<body>
 <H2>PAGINA ADMIN</H2>

        <div class="botoes">
            <button type="button" onclick="window.location.href='{{ url('admin/alunos/users') }}';" class="btn">Excluir Perfil</button>
        <button type="submit" class="btn" onclick="window.location.href='{{ url('admin/exercicios/editarexercicios') }}';">Editar Biblioteca de Exercícios </button>
        </div>
    <div class="container">
        @yield('content')
    </div>
    <script src="{{asset('script.js') }}"></script>
</body>
</html>

