@extends('layouts.adminlayout')
@section('title','Detail Application Adminpanel Nature Lovers')
@section('main_content')
<h5>{{$application->app_name}}</h5>
<h6>{{$application->name_org}}</h6>
<h7>{{$application->partner_name}}</h7>
<div class="modal-footer">
		<a href="{{route('applications.index')}}" class="btn btn-secondary" data-dismiss="modal">Назад</a>
	</div>
@endsection





