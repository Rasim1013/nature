@extends('layouts.layout')
@section('title','Donate')
@section('main_content')
<div class="container">
	<div class="card-header mt-3">
	<h4>Donates for {{$donates->header}}</h4>
</div>
<div class="card-body">
	<form class="needs-validation" action="{{ route('donates.store') }}" method="post" enctype="multipart/form-data">
	@csrf
	<input type="text" name="id" hidden value="{{$donates->id}}">
	<div class="row">
		<div class="col-lg-4 mt-2">
			<div class="col-md-12 mb-3">
				<div class="row">
					<h3 class="text-center bg-warning">1 YOUR GIF</h3>
					<div class="col-3"><a class="btn btn-primary text-center">$20</a></div>
					<div class="col-3"><a class="btn btn-primary text-center">$50</a></div>
					<div class="col-3"><a class="btn btn-primary text-center">$100</a></div>
					<div class="col-3"><a class="btn btn-primary text-center">$250</a></div>
					<div class="col-12"><input class="mt-3 w-100 text-center form-control" id="validationCustom01"  type="text" name="gift" placeholder="OTHER AMOUNT" required></div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 mt-2">
			<div class="col-md-12 mb-3">
				<div class="row">
					<h3 class="text-center bg-warning">2 YOUR  BILLING INFO</h3>
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
						<input type="text" name="phone"  class="form-control" id="validationCustom01"  placeholder="Phone number" required>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-md-6 mt-2">
					<input type="text" name="country"  class="form-control" id="validationCustom01"  placeholder="Country" required>
					</div>
					<div class="col-12 col-md-6 mt-2">
						<input type="text" name="zip"  class="form-control" id="validationCustom01"  placeholder="ZIP/Postal Code" required>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-md-6 mt-2">
					<input type="text" name="address"  class="form-control" id="validationCustom01"  placeholder="Address" required>
					</div>
					<div class="col-12 col-md-6 mt-2">
						<input type="text" name="unit"  class="form-control" id="validationCustom01"  placeholder="Unit #" required>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-md-6 mt-2">
					<input type="text" name="city"  class="form-control" id="validationCustom01"  placeholder="CIty" required>
					</div>
					<div class="col-12 col-md-6 mt-2">
						<input type="text" name="state_province"  class="form-control" id="validationCustom01"  placeholder="State/Province" required>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 mt-2">
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
		</div>
	</div>
	<div class="modal-footer">
		<a href="{{route('donates.index')}}" class="btn btn-secondary" data-dismiss="modal">Back</a>
		<button type="submit" class="btn btn-primary">Donate</button>
	</div>
</form>
</div>
@endsection