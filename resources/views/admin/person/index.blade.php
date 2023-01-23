@extends('layouts.adminlayout')
@section('title','Adminpanel Nature Lovers')
@section('main_content')
<div class="container">
	@if (Auth::user()->group_id==5)
	<a href="{{route('persons.create')}}" class="btn btn-primary">Добавить</a>
	@endif
	<h3 class="text-center">Список Пользователей</h3>
	<table class="table table-dark table-striped ">
	  <thead>
	    <tr>
	      <th scope="col">ID</th>
	      <th scope="col">Фамилия и Имя</th>
	      <th scope="col">Операции</th>
	    </tr>
	  </thead>
	  <tbody>
	    @foreach($users as $user)
	    @if ($user->id==Auth::user()->id || Auth::user()->group_id==5)
	    <tr>
	      <th class="@if($user->status == 0) bg-danger @endif" scope="row">{{$user->id}}</th>
	      <td class="@if($user->status == 0) bg-danger @endif">{{$user->name}}  {{$user->surname}}</td>
	      <td class="@if($user->status == 0) bg-danger @endif">
	      	<a class="btn btn-success mt-1" href="{{ route('persons.show', $user->id) }}">Detail</a>
	      	<a class="btn btn-warning mt-1" style="width:68px;" href="{{ route('persons.edit', $user->id) }}">Edit</a>
	      	@if (Auth::user()->group_id==5)
	      	<a class="btn btn-danger mt-1" href="{{ route('persons.destroy', $user->id) }}">Delete</a>
	      	@endif
	      </td>
	    </tr>
	    @endif
	    @endforeach
	  </tbody>
	</table>
</div>

@endsection