@extends('layouts.adminlayout')
@section('title','Adminpanel Parcham')
@section('main_content')
<form class="needs-validation" action="{{ route('addonates.update', [$donate->id]) }}" method="post" enctype="multipart/form-data">
	@csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{$donate['id']}}">
	<div class="form-row">
		<div class="col-md-12 mb-3">
			<label for="validationCustom01">Header</label>
			<input type="text" name="header"  class="form-control" id="validationCustom01" value="{{ $donate->header }}" required>
		</div>
		<div class="col-md-12 mb-3">
			<label for="validationCustom02">Location</label>
			<input type="text" name="location"  class="form-control" id="validationCustom02" value="{{ $donate->location}}" required>
		</div> 
	</div>
	<div class="form-row">
		<div class="col-md-12 mb-3">
			<label for="validationCustom01">Funding goal (TJS)</label>
			<input type="number" name="funding_goal"  class="form-control" id="validationCustom01"  value="{{ $donate->funding_goal}}" required>
		</div>
		<div class="col-md-12 mb-3">
			<label for="validationCustom02">Final day</label>
			<input type="date" name="final_day"  class="form-control" id="validationCustom02"  value="{{ $donate->final_day }}" required>
		</div> 
	</div>
	<div class="form-row">
		<div class="col-md-12 mb-3">
			<label for="validationCustom03">Description</label>
			<textarea class="form-control" id="description" name="description" rows="4" value="" required>{{ $donate->description }}</textarea>
		</div>
		<div class="col-md-12 mb-3">
			<label for="validationCustom03">Status</label>
			<select class="custom-select" name="status" id="status">
				<option value="{{ $donate->status }}">Select status</option>
				<option value="1">Active</option>
				<option value="0">Non Activa</option>
			</select>
		</div>
	</div>
	<div class="col-md-12 mb-3">
		<label class="form-control-label" for="photo">Load image</label>
		<input type="file" name="photo" id='photo'>
	</div>
	<div class="modal-footer">
		<a href="{{route('addonates.index')}}" class="btn btn-secondary" data-dismiss="modal">Back</a>
		<button type="submit" class="btn btn-primary">Update</button>
	</div>
</form>
@endsection





