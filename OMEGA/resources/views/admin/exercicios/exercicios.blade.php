@extends('master')

@section('content')

<h2>Lista de Exercícios</h2>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Tipo</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($exercicios as $exercicio)
        <tr>
            <td>{{ $exercicio->Id_Exerc }}</td>
            <td>{{ $exercicio->NomeExercicio }}</td>
            <td>{{ $exercicio->Tipo_Exerc }}</td>
            <td>
                <a href="{{ route('exercicios.edit', $exercicio->Id_Exerc) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('exercicios.destroy', $exercicio->Id_Exerc) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
