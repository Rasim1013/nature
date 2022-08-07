<!DOCTYPE html>
<html lang="ru">
<head> 
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicon -->
    <link href="{{asset('img/nature-lovers-logo.png')}}" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet"> 
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>
<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="" style="width: 16rem; height: 16rem;" role="status">
            <!-- <span class="sr-only">Loading...</span> -->
            <img src="{{asset('img/nature-lovers-logo.png')}}" class="w-100">
        </div>
    </div>
    <!-- Spinner End -->
    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <a target="_blank" href="https://goo.gl/maps/MAL3tAMK5Q6dagab9">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>736200, Vamar, Rushon, GBAO, Tajikistan</small>
                    </a>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+992 93 421 9099</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="/" style="margin-left: 5px;" class="navbar-brand d-flex align-items-center px-lg-5">
            <img class="col-lg-3 w-50" src="{{asset('img/nature-lovers-logo.png')}}">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{route('home.page')}}" class="nav-item nav-link active">ГЛАВНАЯ</a>
                <div class="nav-item dropdown">
                    <a href="{{route('about.us')}}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown-toggle">О НАС</a>
                    <!-- <div class="dropdown-menu fade-up m-0">
                        <a href="#ourexperts" class="dropdown-item link">Our Experts</a>
                        <a href="#ourclients" class="dropdown-item">Our Clients</a>
                        <a href="#ourclients" class="dropdown-item">Our Clients</a>
                    </div> -->
                </div>
                <div class="nav-item dropdown">
                    <a href="{{route('members')}}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown-toggle">ЧЛЕНЫ АССОЦИАЦИИ</a>
                    <!-- <div class="dropdown-menu fade-up m-0">
                        <a href="#ourexperts" class="dropdown-item link">Our Experts</a>
                        <a href="#ourclients" class="dropdown-item">Our Clients</a>
                        <a href="#ourclients" class="dropdown-item">Our Clients</a>
                    </div> -->
                </div>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown-toggle">ПРОГРАММЫ И ПРОЕКТЫ</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="{{route('prog.project')}}" class="dropdown-item link">ПРОГРАММА</a>
                        <a href="project" class="dropdown-item">ПРОЕКТ</a>
                        <a href="management" class="dropdown-item">УПРАВЛЕНИЕ</a>
                        <a href="indicator" class="dropdown-item">ИНДИКАТОР</a>
                    </div>
                </div><div class="nav-item dropdown">
                    <a href="consultation" class="nav-link dropdown-toggle" data-bs-toggle="dropdown-toggle">КОНСУЛТАЦИЯ</a>
                    <!-- <div class="dropdown-menu fade-up m-0">
                        <a href="#ourexperts" class="dropdown-item link">Our Experts</a>
                        <a href="#ourclients" class="dropdown-item">Our Clients</a>
                        <a href="#ourclients" class="dropdown-item">Our Clients</a>
                    </div> -->
                </div>
                <div class="nav-item dropdown">
                    <a  class="nav-link dropdown-toggle" data-bs-toggle="dropdown-toggle">УСЛУГИ</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="{{route('account.service')}}" class="dropdown-item link">БУХГАЛТЕРСКИЕ УСЛУГИ</a>
                        <a href="{{route('legal.service')}}" class="dropdown-item">ЮРИДИЧЕСКИЕ УСЛУГИ</a>
                        <a href="{{route('use.assets')}}" class="dropdown-item align-items-center">ПОЛЬЗОВАНИЕ АКТИВАМИ АССОЦИАЦИИ</a>
                        <a href="#ourclients" class="dropdown-item align-items-center">ИТ-УСЛУГИ</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="{{route('contact')}}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown-toggle">КОНТАКТЫ</a>
                   <!--  <div class="dropdown-menu fade-up m-0">
                        <a href="" class="text-uppercase dropdown-item">Parcham Reservation</a>
                        <a href="" class="text-uppercase dropdown-item">Physical and geographical conditions</a>
                        <a href="" class="text-uppercase dropdown-item">Flora and vegetation</a>
                        <a href="" class="text-uppercase dropdown-item">Animal world</a>
                    </div> -->
                </div>
            </div>
            <a href="{{route('home.page')}}#donate" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">DONATE<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->
        @yield('main_content')
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-light mb-4">Адрес</h4>
                    <a target="_blank" href="https://goo.gl/maps/MAL3tAMK5Q6dagab9">
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>736200, Вамар, Рушан, ГБАО, ТАДЖИКИСТАН</p>
                    </a>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+992 93 421 9099</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@nature-lovers.org</p>
                    
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Социальные сети</h4>
                    <div class="d-flex pt-2">
                        <a href="https://www.instagram.com/tajwildlife.tajikistan/" class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Меню</h4>
                    <a class="btn btn-link" href="{{route('home.page')}}">Главная</a>
                    <a class="btn btn-link" href="{{route('about.us')}}">О нас</a>
                    <a class="btn btn-link" href="{{route('members')}}">Члены ассоциации</a>
                    <a class="btn btn-link" href="{{route('prog.project')}}">Программы и проекты</a>
                    <a class="btn btn-link" href="{{route('consultation')}}">Консултация</a>
                    <a class="btn btn-link" href="{{route('account.service')}}">Услуги</a>
                    <a class="btn btn-link" href="{{route('contact')}}">Контакты</a>
                </div>
                <div class="col-lg-2 text-center col-md-6">
                    <h4 class="text-light  mb-4">ДУСТДОРОНИ ТАБИАТ</h4>
                    <a class="text-light mb-4" href="">Nature-Lovers in Tajikistan</a>
                </div>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
    <!-- Footer End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>