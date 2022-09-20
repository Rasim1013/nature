@extends('layouts.auth')
@section('title','Admin-Panel-NatureLovers')
@section('content')
<div class="login-box">
  <div class="login-logo">
    <a href="{{ route('login') }}" style="font-family: Palatino Linotype;"><b>NATURE LOVERS</b><br>ADMIN PANEL</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body  bg-dark">
      <p class="login-box-msg">Введите логин и пароль</p>

      <form action="{{ route('login.store') }}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="text" name="phone" value="{{ old('phone') }}" class="form-control" placeholder="Номер телефона">
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
        <div class="row">
          <div class="col-12 col-xl-4 col-xxl-4 col-md-4 col-sm-4">
            <button type="submit" class="btn btn-success btn-block">Вход</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
      <p class="mb-1">
        <a href="{{ route('forget.password.get') }}" class="text-success">Забыл пароль </a>
      </p>
      <p class="mb-0">
        <a href="{{ route('registration') }}" class="text-center text-success">Регистрация </a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
@endsection
