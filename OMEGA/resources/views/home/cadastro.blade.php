<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
</head>

<body>

    <header class="Cabecalho">

        <img src="{{ asset('img/Olimp.svg') }}" alt="academiaolimpo" class="logo" width="400x" height="400px">

    </header>

    <main class="Cadastro">

        <div class="background">

            <div id="CADASTRO">
                <h2>CADASTRO</h2>

                @if(session('success'))
                <p style="color: green;">{{ session('success') }}</p>
                @endif

            </div>

            <form action="{{ route('alunos.store') }}" method="POST">
                @csrf <!-- Token de segurança necessário -->

                <label for="Nome">Nome:</label><br>
                <input type="text" id="nome" name="nome" class="formCadastro" value="{{ old('nome') }}"><br><br>

                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" class="formCadastro" value="{{ old('email') }}"><br><br>

                <label for="senha">Senha:</label><br>
                <input type="password" id="senha" name="senha" class="formCadastro"><br><br>

                <label for="CPF">CPF:</label><br>
                <input type="text" id="cpf" name="cpf" class="formCadastro" value="{{ old('cpf') }}"><br><br>

                <button type="submit" class="btn">Cadastrar</button>

            </form>

            <!-- Exibição de erros de validação -->
            @if ($errors->any())
            <div style="color: red;">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </main>
</body>
</html>
