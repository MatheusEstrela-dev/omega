@extends('master')

@section('content')

<h2>Users</h2>

<ul>
    @foreach($users as $user)
    <li>{{$user->nome}} | <a href="{{ route('user.edit', ['user' => $user->id]) }}">Edit</a> | <a href="">Delete</a></li>
    <li>{{$user->email}} | <a href="">Edit</a> | <a href="">Delete</a></li>
    @endforeach
</ul>

@endsection
