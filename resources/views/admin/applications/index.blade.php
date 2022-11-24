@extends('layouts.adminlayout')
@section('title','APPLICATION PAGE')
@section('main_content')
<div class="container">
    <a href="{{route('applications.create')}}" class="btn btn-primary">Добавит заявку</a>
    <h3 class="text-center">Список заявок</h3>
    <table class="table table-dark table-striped ">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Название заявки</th>
              <th scope="col">Operation</th>
            </tr>
          </thead>
          <tbody>
            @foreach($applications as $application)
            @if ($application->user_id==Auth::user()->id)
            <tr>
              <th class="@if($application->status > 0) bg-danger @endif" scope="row">{{$application->id}}</th>
              <td class="@if($application->status > 0) bg-danger @endif">{{$application->app_name}}</td>
              <td class="@if($application->status > 0) bg-danger @endif">
                <a class="btn btn-success" href="{{ route('applications.show', $application->id) }}">Detail</a>
                <a class="btn btn-warning" href="{{ route('applications.edit', $application->id) }}">Edit</a>
              </td>
            </tr>
            @endif
            @endforeach
          </tbody>
    </table>
</div>
@endsection