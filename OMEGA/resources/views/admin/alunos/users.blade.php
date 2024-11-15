@extends('master')

@section('content')

<a href="{{ route ('users.create')}}">Criar</a>

<h2>Usuarios</h2>

<ul>
    @foreach($users as $user)
    <li>{{ $user->name }} | <a href="{{ route('users.edit', ['user' => $user->id]) }}">Editar</a> | <a href="{{ route ('users.show', ['user'=> $user->id]) }}">Deletar</a></li>

    @endforeach
</ul>

@endsection
