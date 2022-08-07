@extends('layouts.adminlayout')
@section('title','Adminpanel Parcham')
@section('main_content')
<div class="container">
	<a href="{{route('addonates.create')}}" class="btn btn-primary">Add Donate</a>
	<h3 class="text-center">Donate list</h3>
	<table class="table table-dark table-striped ">
	  <thead>
	    <tr>
	      <th scope="col">ID</th>
	      <th scope="col">Header</th>
	      <th scope="col">Operation</th>
	    </tr>
	  </thead>
	  <tbody>
	    @foreach($donates as $donate)
	    <tr>
	      <th class="@if($donate->status == 0) bg-danger @endif" scope="row">{{$donate->id}}</th>
	      <td class="@if($donate->status == 0) bg-danger @endif">{{$donate->header}}</td>
	      <td class="@if($donate->status == 0) bg-danger @endif">
	      	<a class="btn btn-success" href="{{ route('donates.show', $donate->id) }}">Detail</a>
	      	<a class="btn btn-warning" href="{{ route('addonates.edit', $donate->id) }}">Edit</a>
	      </td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>
</div>


@endsection