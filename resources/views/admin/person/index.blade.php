@extends('layouts.adminlayout')
@section('title','Adminpanel Nature Lovers')
@section('main_content')
<div class="container">
	<a href="{{route('persons.create')}}" class="btn btn-primary">Add User</a>
	<h3 class="text-center">Users list</h3>
	<table class="table table-dark table-striped ">
	  <thead>
	    <tr>
	      <th scope="col">ID</th>
	      <th scope="col">Name and Surname</th>
	      <th scope="col">Operation</th>
	    </tr>
	  </thead>
	  <tbody>
	    @foreach($users as $user)
	    <tr>
	      <th class="@if($user->status == 0) bg-danger @endif" scope="row">{{$user->id}}</th>
	      <td class="@if($user->status == 0) bg-danger @endif">{{$user->name}}  {{$user->surname}}</td>
	      <td class="@if($user->status == 0) bg-danger @endif">
	      	<a class="btn btn-success" href="{{ route('persons.show', $user->id) }}">Detail</a>
	      	@if(Auth::user()->role_id==2)
	      	<a class="btn btn-warning" href="{{ route('persons.edit', $user->id) }}">Edit</a>
	      	@endif
	      </td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>
</div>

@endsection