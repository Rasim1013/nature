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
              <th scope="col">Статус</th>
              <th scope="col">Операции</th>
            </tr>
          </thead>
          <tbody>
            @foreach($applications as $application)
            @if ($application->user_id==Auth::user()->id || Auth::user()->group_id==5)
            <tr class="@if($application->status_id == 3) bg-success @endif">
              <th class="@if($application->status > 0) bg-danger @endif" scope="row">{{$application->id}}</th>
              <td class="@if($application->status > 0) bg-danger @endif">{{$application->app_name}}</td>
              <td class="@if($application->status > 0) bg-danger @endif">{{$application->app_stat->stat_name}}</td>
              <td class="@if($application->status > 0) bg-danger @endif">
                <a class="btn btn-info" href="{{ route('applications.show', $application->id) }}">Подробно</a>
                @if ($application->status_id == 1 || Auth::user()->group_id==5)
                <a class="btn btn-warning" href="{{ route('applications.edit', $application->id) }}">Редактировать</a>
                @endif
              </td>
            </tr>
            @endif
            @endforeach
          </tbody>
    </table>
</div>
@endsection