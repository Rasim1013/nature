@extends('layouts.layout')
@section('title','Donate')
@section('main_content')
<div class="container mt-3">
    <div class="row">
       @foreach($donates as $donate)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <img style="height: 285px;" class="card-img-top" src="{{asset('storage/' . $donate->photo)}}"  alt="Donate image">
                <div class="card-body">
                <h4 class="card-title">{{$donate->header}}</h4>
                <p class="card-text">{{$donate->description}}</p>
                </div> 
                <div class="card-footer">
                    <div class="row">
                        <div class="col-2">
                            <input id="qty_37" type="numeric" class="form-control product-quantity float-left" value="1" style="display:none;">
                        </div>
                        <div class="col-5">
                            <a href="{{ route('donates.show', $donate->id) }}" class="btn btn-success addCartItem float-right">View Details</a>
                        </div>
                        <div class="col-5">
                            <a id="#" href="{{ route('donates.edit', $donate->id) }}" class="btn btn-secondary addCartItem float-right">Donate Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       @endforeach
    </div>
</div>
@endsection