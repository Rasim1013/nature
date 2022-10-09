
@extends('layouts.auth')
@section('title','Сброс  пароля')
@section('content')

<h1>Забыл пароль</h1>
   
Вы можете сбросить пароль по ссылке ->
<a href="{{ route('reset.password.get', $token) }}">Сброс пароля</a> 

@endsection


