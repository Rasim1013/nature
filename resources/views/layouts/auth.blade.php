<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <link rel="shortcut icon" href="{{asset('tamplate/dist/img/Logo.png')}}">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{asset('tamplate/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('tamplate/icheck-bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('tamplate/adminlte.min.css')}}">
</head>
<body class="hold-transition login-page bg-success">
    <!-- Content Header (Page header) -->
    
<div class="login-box">
<div class="container">
      @if (session('success'))
      <div class="text-center alert alert-success alert-dismissible fade show" id="my-alert" role="alert">
        {{session('success')}}
      </div>
      @endif
    </div>
    <div class="container">
      @if (session('danger'))
      <div class="text-center alert alert-danger alert-dismissible fade show" id="my-alert" role="alert">
        {{session('danger')}}
      </div>
      @endif
    @yield('content')

  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@include('sweetalert::alert')
<!-- jQuery -->
<script src="{{asset('tamplate/jquery.min.js')}}"></script>
<script src="{{asset('tamplate/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('tamplate/adminlte.js')}}"></script>
<script>
window.setTimeout(function(){
$('#my-alert').alert('close');
},10000);
</script>
</body>
</html>
