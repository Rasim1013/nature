@extends('layouts.auth')
@section('title','Сброс пароля')
@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-12">
              <div class="card">
                  <div class="card-header text-secondary">Сброс паролья вашего аккаунта</div>
                  <div class="card-body">
                      <form action="{{ route('reset.password.post') }}" method="POST">
                          @csrf
                          <input type="hidden" name="token" value="{{ $token }}">
                          <div class="form-group row">
                              <label for="email_address" class="col-md-6 col-form-label">E-Mail адресс</label>
                              <div class="col-md-6">
                                  <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="password" class="col-md-6 col-form-label">Пароль</label>
                              <div class="col-md-6">
                                  <input type="password" id="password" class="form-control" name="password" required autofocus>
                                  @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="password-confirm" class="col-md-6 col-form-label">Подтверждение паролья</label>
                              <div class="col-md-6">
                                  <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required autofocus>
                                  @if ($errors->has('password_confirmation'))
                                      <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                  @endif
                              </div>
                          </div>
                          <hr>
                          <div class="col-md-6 offset-md-4 mt-2">
                              <button type="submit" class="btn btn-primary">
                                  Сброс паролья
                              </button>
                              <a href="{{ route('forget.password.get') }}" class="btn btn-success mt-2">Новый запрос</a>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection


           

           