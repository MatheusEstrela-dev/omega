@extends('master')

@section('content')

<h2>Criar</h2>

@if (session()->has('message'))
    {{session()->get('message')}}
@endif


<form action="{{ route ('users.store') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Nome" value="Alex">
    <input type="text" name="email" placeholder="Email" value="Xavier@gmail.com">
    <input type="text" name="email" placeholder="psw" value="12345678">
    <button type="submit">Criar</button>
</form>

@endsection
