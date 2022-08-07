@extends('layouts.adminlayout')
@section('title','Adminpanel Parcham')
@section('main_content')
<form class="needs-validation" action="{{ route('addonates.store') }}" method="post" enctype="multipart/form-data">
	@csrf
	<div class="form-row">
		<div class="col-md-12 mb-3">
			<label for="validationCustom01">Header</label>
			<input type="text" name="header"  class="form-control" id="validationCustom01"  placeholder="Header" value="{{ old('header') }}" required>
		</div>
		<div class="col-md-12 mb-3">
			<label for="validationCustom02">Location</label>
			<input type="text" name="location"  class="form-control" id="validationCustom02" placeholder="Location" value="{{ old('location') }}" required>
		</div> 
	</div>
	<div class="form-row">
		<div class="col-md-12 mb-3">
			<label for="validationCustom01">Funding goal (TJS)</label>
			<input type="number" name="funding_goal"  class="form-control" id="validationCustom01"  placeholder="Funding goal" value="{{ old('funding_goal') }}" required>
		</div>
		<div class="col-md-12 mb-3">
			<label for="validationCustom02">Final day</label>
			<input type="date" name="final_day"  class="form-control" id="validationCustom02" placeholder="Final day" value="{{ old('final_day') }}" required>
		</div> 
	</div>
	<div class="form-row">
		<div class="col-md-12 mb-3">
			<label for="validationCustom03">Description</label>
<textarea class="form-control" id="description" name="description" rows="4" value="{{ old('description') }}" required>
</textarea>
		</div>
	</div>
	<div class="col-md-12 mb-3">
		<label class="form-control-label" for="photo">Load image</label>
		<input type="file" name="photo" id='photo'>
	</div>
	<div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыт</button>
		<button type="submit" class="btn btn-primary">Добавит</button>
	</div>
</form>
@endsection





