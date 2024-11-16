<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="{{ asset('css/escolhatreino.css') }}">
        <title>Escolha de Treino</title>
        <style>
            background-image: url('{{ asset('img/background.jpeg') }}');
        </style>
    </head>

    <body>

        <header class="cabecalho">
            <img src="{{ asset('img/Olimp.svg') }}" alt="LOGO" width="500" height="400" />
        </header>

        <section class="exercicios">

            <div class="preparofisico">

                <a href="">
                    <img
                        src="{{ asset('img/PreparoFisico.svg') }}"
                        alt="PreparoFisico"
                        width="250px" height="250px"
                    />
                </a>
                <p>Preparo Físico</p>

            </div>

            <div class="hipertrofia">

                <a href="">
                    <img
                        src="{{ asset('img/hipertrofia.svg') }}"
                        alt="Hipertrofia"
                        width="250px" height="250px"
                    />
                </a>
                <p>Hipertrofia</p>
    

            </div>

            <div class="emagrecer">

                <a href="">
                    <img
                        src="{{ asset('img/emagrecer.svg') }}"
                        alt="Emagrecer"
                        width="250px" height="250px"
                    />
                </a>
                <p>Emagrecer</p> 

            </div>

        </section>

        <footer class="botoes">

            <button id="avancar">Avançar</button>
            <button id="voltar">Voltar</button>

        </footer>

    </body>

</html>
