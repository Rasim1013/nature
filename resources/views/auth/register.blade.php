@extends('layouts.auth')
@section('title','Регистрация')
@section('content')
<style>
    input:invalid {
        border-color: red;
    }
</style>
<div class="register-box">
  <div class="register-logo">
    <a href="{{ route('login') }}" style="font-family: Palatino Linotype;"><b>ADMIN PANEL<br>NATURE LOVERS</b></a>
  </div>
  <div class="card">
    <div class="card-body register-card-body  bg-dark">
      <p class="login-box-msg">Регистрация нового пользователья</p>
      <form action="{{ route('register.store') }}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Имя">
          @error('name')
            <span class="text-red-400" role="alert">
              <strong>{{ $message }}</strong>
            </span>
           @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="surname" value="{{ old('surname') }}" class="form-control" placeholder="Фамилия">
          @error('surname')
            <span class="text-red-400" role="alert">
              <strong>{{ $message }}</strong>
            </span>
           @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="phone" value="{{ old('phone') }}" class="form-control" placeholder="Телефон">
          @error('phone')
            <span class="text-red-400" role="alert">
              <strong>{{ $message }}</strong>
            </span>
           @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
            <select class="form-control" name="group_id">
              <option>--- Что вас интересует? ---</option>
                @foreach($groups as $group)
                @if ($group->id != 5)
                  <option class="form-control" value="{{ $group->id }}">{{$group->name}} - ({{$group->city}})  </option>
                @endif
                @endforeach
                </select>
              @error('group')
              <span class="text-red-400" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Пароль">
          @error('password')
            <span class="text-red-400" role="alert">
              <strong>{{ $message }}</strong>
            </span>
           @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input id="password_confirmation" type="password" name="password_confirmation"  class="form-control form-control-user" placeholder="Подтверждение пароля">
           @error('password_confirmation')
            <span class="text-red-400" role="alert">
              <strong>{{ $message }}</strong>
            </span>
           @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
  
        <div class="row">
          <div class="col-6">
            <button type="submit" class="btn btn-primary btn-block">Регистрация</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <a href="{{ route('login') }}" class="text-center">У меня есть учетный запись</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
@endsection