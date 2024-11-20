@extends('master')

@section('content')

<h2>Editar Exercício</h2>

@if (session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

<form action="{{ route('exercicios.update', $exercicio->Id_Exerc) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="NomeExercicio">Nome do Exercício:</label>
        <input type="text" name="NomeExercicio" id="NomeExercicio" class="form-control" value="{{ $exercicio->NomeExercicio }}" required>
    </div>

    <div class="form-group">
        <label for="Tipo_Exerc">Tipo:</label>
        <input type="text" name="Tipo_Exerc" id="Tipo_Exerc" class="form-control" value="{{ $exercicio->Tipo_Exerc }}" required>
    </div>

    <div class="form-group">
        <label for="CodigoAdm">Código do Administrador:</label>
        <input type="number" name="CodigoAdm" id="CodigoAdm" class="form-control" value="{{ $exercicio->CodigoAdm }}" required>
    </div>

    <button type="submit" class="btn btn-primary mt-2">Salvar Alterações</button>
</form>

@endsection
