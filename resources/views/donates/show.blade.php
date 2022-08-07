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
        <a class="btn btn-primary" href="{{route('donates.index')}}">Back</a>
        <a class="btn btn-secondary" href="/donates/{{$id}}/edit">Donate Now</a>
    </div>
</div>
@endsection