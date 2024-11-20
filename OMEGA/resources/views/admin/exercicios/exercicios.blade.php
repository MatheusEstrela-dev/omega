@extends('master')

@section('content')

<h2>Lista de Exercícios</h2>

@if (session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

<div class="mb-3">
    <a href="{{ route('exercicios.create') }}" class="btn btn-success">Criar Novo Exercício</a>
</div>

<table class="table">
    <thead>
        <tr>
            <th hidden>ID</th>
            <th>Nome</th>
            <th>Tipo</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($exercicios as $exercicio)
        <tr>
            <!-- Esconde o ID -->
            <td hidden>{{ $exercicio->Id_Exerc }}</td>
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
