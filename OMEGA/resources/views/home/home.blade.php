<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h2>HOME</h2>

    <form action="/process_login.php" method="POST">
        @csrf
        <label for="email">Digite seu e-mail:</label>
        <input type="email" name="email" required><br>

        <label for="password">Digite sua senha:</label>
        <input type="password" name="password" required><br>

        <button type="submit">Entrar</button>
    </form>

</div>

<div id="esqueciSenha">
    <a href="#linkdasenha" class="botaosenha">ESQUECI A SENHA</a>
</div>

<div class="button">

    <button type="button" onclick="window.location.href='{{ url('aluno/alunopage') }}';" class="btn">ENTRAR</button>
    <button type="button" onclick="window.location.href='{{ url('/home/cadastro') }}';" class="btn">CRIE UMA CONTA</button>


</div>


</body>
</html>
