@extends('layouts.layout')
@section('title','Home')
@section('main_content')
<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img/carousel-bg-1.jpg" alt="Image">
                <div class="carousel-caption d-flex align-items-center">
                    <div class="container">
                        <div class="row align-items-center justify-content-center justify-content-lg-start">
                            <div class="col-10 col-lg-8 text-center text-lg-start">
                                <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Community //</h6>
                                <h1 class="display-3  text-uppercase text-white mb-4 pb-3 animated slideInDown">Individuals (volunteers)</h1>
                                <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Learn More<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                            <!-- <div class="col-lg-4 d-none d-lg-flex animated zoomIn">
                                <img class="img-fluid" src="img/carousel-1.png" alt="">
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="img/carousel-bg-2.jpg" alt="Image">
                <div class="carousel-caption d-flex align-items-center">
                    <div class="container">
                        <div class="row align-items-center justify-content-center justify-content-lg-start">
                            <div class="col-10 col-lg-8 text-center text-lg-start">
                                <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Community //</h6>
                                <h1 class="display-3  text-uppercase text-white mb-4 pb-3 animated slideInDown">Rural community</h1>
                                <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Learn More<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                        <!--     <div class="col-lg-4 d-none d-lg-flex animated zoomIn">
                                <img class="img-fluid" src="img/carousel-2.png" alt="">
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="img/carousel-bg-3.jpg" alt="Image">
                <div class="carousel-caption d-flex align-items-center">
                    <div class="container">
                        <div class="row align-items-center justify-content-center justify-content-lg-start">
                            <div class="col-10 col-lg-8 text-center text-lg-start">
                                <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Community //</h6>
                                <h1 class="display-3  text-uppercase text-white mb-4 pb-3 animated slideInDown">Rural community</h1>
                                <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Learn More<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                        <!--     <div class="col-lg-4 d-none d-lg-flex animated zoomIn">
                                <img class="img-fluid" src="img/carousel-2.png" alt="">
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->
<!-- Service Start -->
<!-- <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="d-flex py-5 px-4">
                    <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                    <div class="ps-4">
                        <h5 class="mb-3">Quality Servicing</h5>
                        <p>Diam dolor diam ipsum sit amet diam et eos erat ipsum</p>
                        <a class="text-secondary border-bottom" href="">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="d-flex bg-light py-5 px-4">
                    <i class="fa fa-users-cog fa-3x text-primary flex-shrink-0"></i>
                    <div class="ps-4">
                        <h5 class="mb-3">Expert Workers</h5>
                        <p>Diam dolor diam ipsum sit amet diam et eos erat ipsum</p>
                        <a class="text-secondary border-bottom" href="">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="d-flex py-5 px-4">
                    <i class="fa fa-tools fa-3x text-primary flex-shrink-0"></i>
                    <div class="ps-4">
                        <h5 class="mb-3">Modern Equipment</h5>
                        <p>Diam dolor diam ipsum sit amet diam et eos erat ipsum</p>
                        <a class="text-secondary border-bottom" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Service End -->
<!-- About Start -->
<div id="aboutus" class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 pt-4" style="min-height: 400px;">
                <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                    <img class="position-absolute img-fluid w-100 h-100" src="img/about.jpg" style="object-fit: cover;" alt="">
                    <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5" style="background: rgba(0, 0, 0, .08);">
                        <h1 class="display-4 text-white mb-0">14 <span class="fs-4">Years</span></h1>
                        <h4 class="text-white">Experience</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h6 class="text-primary text-uppercase">// членство //</h6>
                <h1 class="mb-4"><span class="text-primary">NGO «Parcham»</span> Tajikistan has wonderful nature and impressive wildlife </h1>
                <p class="mb-4">that attracts dozens of tourists from abroad as well as locals. Unfortunately, there are endangered species in Tajikistan, such as the Marco Polo snow leopard and the ibex, which are the main attributes of this mountainous area, and are declining.</p>
                <div class="row g-4 mb-3 pb-3">
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-flex">
                            <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                <span class="fw-bold text-secondary">01</span>
                            </div>
                            <div class="ps-3">
                                <h6>Size:</h6>
                                <span>47000 hectares</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 wow fadeIn" data-wow-delay="0.3s">
                        <div class="d-flex">
                            <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                <span class="fw-bold text-secondary">02</span>
                            </div>
                            <div class="ps-3">
                                <h6>Number of guides:</h6>
                                <span>14</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="d-flex">
                            <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                <span class="fw-bold text-secondary">03</span>
                            </div>
                            <div class="ps-3">
                                <h6>Founded:</h6>
                                <span>2008</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 wow fadeIn" data-wow-delay="0.7s">
                        <div class="d-flex">
                            <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                <span class="fw-bold text-secondary">04</span>
                            </div>
                            <div class="ps-3">
                                <h6>Distance & Elevation</h6>
                                <span>509 km   & 3043m</span>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{route('about.us')}}" class="btn btn-primary py-3 px-5">Read More<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
<!-- Fact Start -->
<!-- <div class="container-fluid fact bg-dark my-5 py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                <i class="fa fa-check fa-2x text-white mb-3"></i>
                <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                <p class="text-white mb-0">Years Experience</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                <p class="text-white mb-0">Expert Technicians</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                <i class="fa fa-users fa-2x text-white mb-3"></i>
                <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                <p class="text-white mb-0">Satisfied Clients</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                <i class="fa fa-car fa-2x text-white mb-3"></i>
                <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                <p class="text-white mb-0">Compleate Projects</p>
            </div>
        </div>
    </div>
</div> -->
<!-- Fact End -->
<!-- Service Start -->
<div class="container-xxl service py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase">// Наши истории//</h6>
            <!-- <h1 class="mb-5">Истории</h1> -->
        </div>
        <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-lg-4">
                <div class="nav w-100 nav-pills me-4">
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 " data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                        <!-- <i class="fa fa-car-side fa-2x me-3"></i> -->
                        <h4 class="m-0">Firuz Davlatmahmadov</h4>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                        <!-- <i class="fa fa-car fa-2x me-3"></i> -->
                        <h4 class="m-0">Bartang Valley & Parcham </h4>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                        <!-- <i class="fa fa-cog fa-2x me-3"></i> -->
                        <h4 class="m-0">Intelligence Community</h4>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                        <!-- <i class="fa fa-oil-can fa-2x me-3"></i> -->
                        <h4 class="m-0">Protection and sustainable of mountain ungulates(Tajikistan)</h4>
                    </button>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="tab-content w-100">
                    <div class="tab-pane fade " id="tab-pane-1">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="img/service-1.jpg"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- <h3 class="mb-3">15 Years Of Experience In Auto Servicing</h3> -->
                                <p class="mb-4">After Firuz Davlatmahmadov discovered that a snow leopard had killed his livestock, he faced a difficult decision.</p>
                                <p><i class="fa fa-check text-success me-3"></i>Source: <b>landofsnowleopard.org</b></p>
                                <a href="https://landofsnowleopard.org/story/firuz-davlatmahmadov/" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="tab-pane-2">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="img/service-2.jpg"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- <h3 class="mb-3">15 Years Of Experience In Auto Servicing</h3> -->
                                <p class="mb-4">Bartang Valley & Parcham Conservancy | Tajikistan Scenery Act IV.</p>
                                <p><i class="fa fa-check text-success me-3"></i>Source: <b>Sergio channel(youtube.com)</b></p>
                                <a href="https://www.youtube.com/watch?v=k8BofpLnCi0" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-3">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="img/service-3.jpg"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- <h3 class="mb-3">15 Years Of Experience In Auto Servicing</h3> -->
                                <p class="mb-4">Community-Based Wildlife Conservation in Bartang Valley</p>
                                <p><i class="fa fa-check text-success me-3"></i>Source: <b>Parcham NGO(tajwildlife.org)</b></p>
                                <a href="https://tajwildlife.org/wp-content/uploads/2022/03/new.pdf" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-4">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="img/service-4.jpg"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- <h3 class="mb-3">15 Years Of Experience In Auto Servicing</h3> -->
                                <p class="mb-4">
                                    The sustainable use of wild mountain ungulates by local peoplefor eco-tourism, hunting tourism and subsistence hunting stimulates the protection of the populations and habitats of these species thus providing an alternative and adapted land-use option contributing to climate resilience trough biodiversity conservation, avoidance of desertification and diversification of land-use.
                                </p>
                                <p><i class="fa fa-check text-success me-3"></i>Source: <b>qcat.wocat.net</b></p>
                                <a href="https://tajwildlife.org/wp-content/uploads/2022/03/new.pdf" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->
<!-- Booking Start -->
<div class="text-center wow fadeInUp" data-wow-delay="0.1s">
@if ($don != 0)
    <h6 id="donate" class="text-primary text-uppercase">// Наши пожертвования //</h6>
@endif
</div>
<div class="container-fluid bg-secondary booking my-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div  class="row gx-5">
            @foreach($donates as $donate)
            @if ($donate->status ==1)
            <div class="col-lg-4 mb-1 mt-1">
                <div class="bg-danger h-100 d-flex flex-column   wow zoomIn" data-wow-delay="0.36s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden" style="height: 285px;">
                            <img class="img-thumbnail w-100" src="{{asset('storage/' . $donate->photo)}}"  alt="Donate image">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="text-white  bg-dark p-2" href="{{ route('donates.show', $donate->id) }}"></i>Подробности</a>
                            </div>
                        </div> 
                        <div class="bg-light text-center p-4">
                            <a href="{{ route('donates.show', $donate->id) }}" class="text-secondary">
                            <h5 class="fw-bold mb-0">{{$donate->header}}</h5>
                            <small>
                                <div class=" mt-2 h-100 d-inline-flex align-items-center">
                                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                                    {{$donate->location}}
                                </div>
                                <p class="mt-3 zagolovok">{{$donate->description}}</p>
                            </small>
                            <hr>
                            <h3>Сбор в процентах:</h3>
                            <div class="progress mb-3">
                              <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo(($donate->funding_goal+$donate->funding_raised-$donate->funding_goal)/($donate->funding_goal/100))?>%;" aria-valuenow="{{($donate->funding_goal+$donate->funding_raised-$donate->funding_goal)/($donate->funding_goal/100)}}" aria-valuemin="0" aria-valuemax="100">{{($donate->funding_goal+$donate->funding_raised-$donate->funding_goal)/($donate->funding_goal/100)}}%</div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                <a class="text-secondary" href="">Цель финансирования</a><br>
                                <small >{{$donate->funding_goal}} TJS</small>
                                </div>
                                <div class="col-4">
                                <a class="text-secondary" href="">Собрано средств</a><br>
                                <small >{{$donate->funding_raised}} TJS</small>
                                </div>
                                <div class="col-4">
                                <a class="text-secondary" href="">Осталось дней</a><br>
                                <small >{{$donate->final_day}}</small>
                                </div>
                            </div>
                            </a>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            @endif
           @endforeach
        </div>
    </div>
</div>
<!-- Booking End -->
<!-- Team Start -->
<div id="ourexperts" class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase">// Наши эксперты //</h6>
            <!-- <h1 class="mb-5">Our Expert Technicians</h1> -->
        </div>
        <div class="justify-content-center row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="img/team-2.jpg" alt="">
                        <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="fw-bold mb-0">Munavar Shamirov</h5>
                        <small>Project Manager</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="img/team-3.jpg" alt="">
                        <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="fw-bold mb-0">Anboz Davlatqadamov</h5>
                        <small>Financial Director</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="img/team-4.jpg" alt="">
                        <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="fw-bold mb-0">Davlatmirov Nasim</h5>
                        <small>Regional Expert</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="img/team-1.jpg" alt="">
                        <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="fw-bold mb-0">Rasim Mirzoev</h5>
                        <small>IT-Manager</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->
<!-- Testimonial Start -->
<!-- <div  id="ourclients" class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h6 class="text-primary text-uppercase">// Отзыв //</h6>
            <h1 class="mb-5">Наши клиенты говорят!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel position-relative">
            <div class="testimonial-item text-center">
                <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;">
                <h5 class="mb-0">Frank Zitz</h5>
                <p>Partners of H&CAT.</p>
                <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0">Frank Zitz has owned and operated Frank J. Zitz & Company for over 30 years. Located in Rhinebeck, New York, the company...</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                <h5 class="mb-0">Client Name</h5>
                <p>Profession</p>
                <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;">
                <h5 class="mb-0">Client Name</h5>
                <p>Profession</p>
                <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;">
                <h5 class="mb-0">Client Name</h5>
                <p>Profession</p>
                <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Testimonial End -->



@endsection
