<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hipertrofia</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <link rel="stylesheet" href="{{ asset('css/exibicaohipertrofia.css') }}">
</head>
<body>

    <header class="cabecalho">
        <img src="{{ asset('img/Olimp.svg') }}" alt="LOGO" width="500" height="400" />
    </header>

    <main class="tabelas">

        <section class="bordered striped centered" id="treino1" >

            <h5><span>Treino 1</span></h5>

            <table>

                <thead>
                    <tr>
                        <th>Series</th>
                        <th>Exercícios</th>
                        <th>Repetições</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>4</td>
                        <td>Supino Reto Barra</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Crossover Polia</td>
                        <td>15</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Crucifixo</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Supino Articulado</td>
                        <td>12</td>
                    </tr>
                </tbody>

            </table>

        </section>

        <section class="bordered striped centered" id="treino2" >

            <h5><span>Treino 2</span></h5>

            <table>

                <thead>
                    <tr>
                        <th>Series</th>
                        <th>Exercícios</th>
                        <th>Repetições</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>4</td>
                        <td>Leg Press 45°</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Cadeira Extensora</td>
                        <td>15</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Mesa flexora</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Cadeira Adutora</td>
                        <td>12</td>
                    </tr>
                </tbody>

            </table>

        </section>

        <section class="bordered striped centered" id="treino3" >

            <h5><span>Treino 3</span></h5>

            <table>
                <thead>
                    <tr>
                        <th>Séries</th>
                        <th>Exercícios</th>
                        <th>Repetições</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>3</td>
                        <td>Pulley P.A</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Remada Curvada</td>
                        <td>8</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Remada Baixa</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Puxada Frontal</td>
                        <td>15</td>
                    </tr>
                </tbody>
            </table>

        </section>

    </main>

    <footer>

        <button id="voltar" onclick="window.location.href='{{ url('aluno/alunopage') }}';">voltar</button>

    </footer>

</body>
</html>
