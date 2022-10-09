@extends('layouts.adminlayout')
@section('title','Edit Adminpanel Nature Lovers')
@section('main_content')
<form class="needs-validation" action="{{ route('persons.update', [$user->id]) }}" method="post" enctype="multipart/form-data">
	@csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{$user['id']}}">
	<div class="form-row">
		<div class="col-md-12 mb-3">
			<label for="validationCustom01">Имя</label>
			<input type="text" name="name"  class="form-control" id="validationCustom01" value="{{ $user->name }}" required>
		</div>
		<div class="col-md-12 mb-3">
			<label for="validationCustom02">Фамилия</label>
			<input type="text" name="surname"  class="form-control" id="validationCustom02" value="{{ $user->surname}}" required>
		</div> 
	</div>
	<div class="form-row">
		<div class="col-md-12 mb-3">
			<label for="validationCustom01">Email</label>
			<input type="email" name="email"  class="form-control" id="validationCustom01"  value="{{ $user->email}}" required>
		</div>
		<div class="col-md-12 mb-3">
			<label for="validationCustom02">Дата рождения</label>
			<input type="date" name="date_of_birthday"  class="form-control" id="validationCustom02"  value="{{ $user->date_of_birthday }}" required>
		</div> 
	</div>
	<div class="form-row">
		<div class="col-md-12 mb-3">
			<label for="validationCustom03">Статус</label>
			<select class="custom-select" name="status" id="status">
				<option value="{{ $user->status }}">Текуший статус {{ $user->stat->name }}</option>
				<option value="1">Активный</option>
				<option value="2">Блокирован</option>
			</select>
		</div>
		<div class="col-md-12 mb-3">
			<label for="validationCustom03">Привилегия</label>
			<select class="custom-select" name="role_id" id="role_id">
				<option value="{{ $user->role_id }}">Текуший доступ как {{ $user->role->name}}</option>
				<option value="1">Модератор</option>
				<option value="2">Администратор</option>
			</select>
		</div>
	</div>
	<div class="modal-footer">
		<a href="{{route('persons.index')}}" class="btn btn-secondary" data-dismiss="modal">Назад</a>
		<button type="submit" class="btn btn-primary">Обновит</button>
	</div>
</form>
@endsection





