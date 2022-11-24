@extends('layouts.auth')
@section('title','Сброс пароля')
@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-12">
              <div class="card bg-dark"> 
                  <div class="card-header text-center">Сброс паролья вашего аккаунта</div>
                  <div class="card-body">
                      <form action="{{ route('reset.password.post') }}" method="POST">
                          @csrf
                          <input type="hidden" name="token" value="{{ $token }}">
                          <div class="form-group row">
                              <div class="col-md-12">
                                  <input type="text" id="email_address" class="form-control" placeholder="Email" name="email" required autofocus>
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <div class="col-md-12">
                                  <input type="password" id="password" class="form-control" placeholder="Password" name="password" required autofocus>
                                  @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <div class="col-md-12">
                                  <input type="password" id="password-confirm" class="form-control" placeholder="Confirm Password"  name="password_confirmation" required autofocus>
                                  @if ($errors->has('password_confirmation'))
                                      <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                  @endif
                              </div>
                          </div>
                          <hr>
                          <div class="col-md-6 offset-md-4 mt-2">
                              <button type="submit" class="text-danger">
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


           

           
