@extends('layouts.layout')
@section('title','Detail')
@section('main_content')
<div class="container mt-3">
    <div class="row">
        <div class="col-12 col-lg-6"><img class="card-img-top" src="{{asset('storage/' . $image)}}"  alt=""></div>
        <div class="col-12 col-lg-6">
            <h4 class="card-title text-center">{{$header}}</h4>
            <p class="card-text mt-3 text-break">{{$description}}</p>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('checkout') }}" method="POST">
            @csrf
            <input type="hidden" name="product_name" value="{{ $donates->header }}">
            <input type="hidden" name="amount" value="{{ $donates->funding_goal }}">
            <a class="btn btn-primary" href="{{route('donates.index')}}">Back</a>
            <input type="submit" class="btn btn-secondary" value="Donate Now">
            {{--
                <a class="text-white  bg-dark p-2" href="{{ route('donates.show', $donates->id) }}"></i>Donate Now</a>
            --}}
        </form>
    </div>
</div>
@endsection 