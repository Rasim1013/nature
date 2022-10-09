@extends('layouts.layout')
@section('title','Donate')
@section('main_content')
<div class="container">
	<div class="card-header mt-3">
	<h4>Пожертвования для: {{$donates->header}}</h4>
</div>
<div class="card-body">
	<form class="needs-validation" action="{{ route('checkout') }}" method="post" enctype="multipart/form-data">
	@csrf
	<input type="text" name="id" hidden value="{{$donates->id}}">
	<div class="row justify-content-center">
		<div class="col-lg-5 mt-2">
			<div class="col-md-12 mb-3">
				<div class="row">
					<h5 class="text-center bg-warning">1-СУММА ПОЖЕРТВОВАНИЯ</h5>
					<div class="col-3"><a class="btn btn-primary text-center" onclick="document.getElementById('donatesum').value=20">$20</a></div>
					<div class="col-3"><a class="btn btn-primary text-center" onclick="document.getElementById('donatesum').value=50">$50</a></div>
					<div class="col-3"><a class="btn btn-primary text-center" onclick="document.getElementById('donatesum').value=100">$100</a></div>
					<div class="col-3"><a class="btn btn-primary text-center" onclick="document.getElementById('donatesum').value=250">$250</a></div>
					<div class="col-12"><input class="mt-3 w-100 text-center form-control text-uppercase text-danger text-bg-danger" id="donatesum" value="" type="text" name="amount" placeholder="OTHER AMOUNT" required>
            							<input type="text" hidden name="product_name" value="{{ $donates->header }}">
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-5 mt-2">
			<div class="col-md-12 mb-3">
				<div class="row">
					<h5 class="text-center bg-warning">2-ВАША ПЛАТЕЖНАЯ ИНФОРМАЦИЯ</h5>
					<div class="col-12 col-md-6 mt-2">
					<input type="text" name="name"  class="form-control" id="validationCustom01"  placeholder="Name" required>
					</div>
					<div class="col-12 col-md-6 mt-2">
						<input type="text" name="surname"  class="form-control" id="validationCustom01"  placeholder="Surname" required>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-md-6 mt-2">
					<input type="text" name="email"  class="form-control" id="validationCustom01"  placeholder="Email Address" required>
					</div>
					<div class="col-12 col-md-6 mt-2">
						<input type="text" name="phone"  class="form-control" id="validationCustom01"  placeholder="Phone number" >
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-md-6 mt-2">
					<input type="text" name="country"  class="form-control" id="validationCustom01"  placeholder="Country" required>
					</div>
					<div class="col-12 col-md-6 mt-2">
					<input type="text" name="city"  class="form-control" id="validationCustom01"  placeholder="CIty" required>
					</div>
				</div>
				<div class="row mt-2">
					<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
					  <input type="radio" class="btn-check" value="1" name="is_publish" id="btnradio1" autocomplete="off" checked>
					  <label class="btn btn-outline-primary" for="btnradio1">Опубликовать на сайте</label>
					  <input type="radio" class="btn-check" value="0" name="is_publish" id="btnradio2" autocomplete="off">
					  <label class="btn btn-outline-primary"  for="btnradio2">Неопубликовать на сайте</label>
					</div>
				</div>
			</div>
		</div>
<!-- 		<div class="col-lg-3 mt-2">
			<div class="col-md-12 mb-3">
				<h3 class="text-center bg-warning">3 YOUR PAYMENT</h3>
				<input id="ccn" type="number" name="credit_card"  class="form-control" id="validationCustom01"  placeholder="Credit Card Number" value="" required pattern="[0-9\s]" >
			</div>
			<div class="row">
				<div class="col-12 col-md-6">
				<input type="number" name="expiration"  class="form-control" id="validationCustom02"  placeholder="Expiration Date" value="" required>
				</div>
				<div class="col-12 col-md-6">
				<input type="password" name="cvv"  class="form-control" id="validationCustom03"  placeholder="CVV" value="" required>
				</div>
			</div>
		</div> -->
	</div>
	<div class="modal-footer">
		<a href="{{route('donates.index')}}" class="btn btn-secondary" data-dismiss="modal">Back</a>
		<button type="submit" class="btn btn-primary">Donate</button>
	</div>
</form>
</div>
</div>
@endsection