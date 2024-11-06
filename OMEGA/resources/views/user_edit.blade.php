@extends('master')

@section('content')

<h2>Edit</h2>

<form action="{{ route ('users.update'), ['user'=> $user->id]}}">
    @csrf
    <input type="hidden" name="__method" value="PUT">
    <input type="text" name='nome' value="{{ $user-> nome}}">
    <input type="text" name='nome' value="{{ $user-> email}}">
    <button type="submit"></button>
</form>

@endsection
