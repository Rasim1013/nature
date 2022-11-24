@extends('layouts.adminlayout')
@section('title','Detail Person Adminpanel Nature Lovers')
@section('main_content')
<h5>{{$user->name}}</h5>
<h5>{{$user->surname}}</h5>
<h5>{{$user->phone}}</h5>
<h5>{{$user->email}}</h5>
<h5>{{$user->last_online_at}}</h5>
<div class="modal-footer">
		<a href="{{route('persons.index')}}" class="btn btn-secondary" data-dismiss="modal">Назад</a>
	</div>
@endsection





