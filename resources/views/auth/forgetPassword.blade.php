@extends('layouts.auth')
@section('title','Востановление паролья')
@section('content')
<div class="login-box">
  <div class="login-logo">
    <a href="{{ route('login') }}" style="font-family: Palatino Linotype;"><b>ҶАМОАТИ  ДЕХОТ</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Страница для востановление паролья. </p>
      <form action="{{ route('forget.password.post') }}" method="POST">
                          @csrf
                          <div class="form-group row">
                              <div class="col-md-12">
                                  <input type="email" id="email_address" class="form-control" name="email" placeholder="Email" required autofocus>
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                              </div>
                          </div>
                          <div class="row">
                            <div class="col-12">
                              <button type="submit" class="btn btn-primary btn-block">Запросит новый пароль </button>
                            </div>
                            <!-- /.col -->
                          </div>
                      </form>
      <p class="mt-3 mb-1">
        <a href="{{ (route('login')) }}">Вход</a>
      </p>
      <p class="mb-0">
        <a href="{{ (route('registration')) }}" class="text-center">Регистрация</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
@endsection