@extends('master')

@section('content')

<h2>Criar Exercício</h2>

@if (session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

<form action="{{ route('admin.exercicios.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="NomeExercicio">Nome do Exercício:</label>
        <input type="text" name="NomeExercicio" id="NomeExercicio" class="form-control" placeholder="Ex: Flexão de Braço" required>
    </div>

    <div class="form-group">
        <label for="Tipo_Exerc">Tipo:</label>
        <input type="text" name="Tipo_Exerc" id="Tipo_Exerc" class="form-control" placeholder="Ex: Preparação Física" required>
    </div>

    <div class="form-group">
        <label for="CodigoAdm">Código do Administrador:</label>
        <input type="number" name="CodigoAdm" id="CodigoAdm" class="form-control" placeholder="Ex: 12345" required>
    </div>

    <button type="submit" class="btn btn-primary mt-2">Criar Exercício</button>
</form>

@endsection
