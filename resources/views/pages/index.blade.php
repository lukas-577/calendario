@extends('layouts.layout')

@section('title', 'Inicio')


@section('header')
<!-- Header Start -->
<div class="container-fluid bg-dark p-0 mb-5">
    <div class="row g-0 flex-column-reverse flex-lg-row">
        <div class="col-lg-6 p-0 wow fadeIn" data-wow-delay="0.1s">
            <div class="header-bg h-100 d-flex flex-column justify-content-center p-5">
                <h1 class="display-4 text-light mb-5">
                    Enjoy Wonderful Day With Your Family
                </h1>
                <div class="d-flex align-items-center pt-4 animated slideInDown">
                    <a href="" class="btn btn-primary py-sm-3 px-3 px-sm-5 me-5">Read More</a>
                    <button type="button" class="btn-play" data-bs-toggle="modal" data-src="#" data-bs-target="#videoModal">
                        <span></span>
                    </button>
                    <h6 class="text-white m-0 ms-4 d-none d-sm-block">Watch Video</h6>
                </div>
            </div>
        </div>
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
            <div class="owl-carousel header-carousel">
                <div class="owl-carousel-item">
                    <img class="img-fluid" src="img/carousel-1.jpg" alt="" />
                </div>
                <div class="owl-carousel-item">
                    <img class="img-fluid" src="img/carousel-2.jpg" alt="" />
                </div>
                <div class="owl-carousel-item">
                    <img class="img-fluid" src="img/carousel-3.jpg" alt="" />
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->
<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-6">
                <p><span class="text-primary me-2">#</span>Our Services</p>
                <h1 class="display-5 mb-0">
                    Special Services For
                    <span class="text-primary">Zoofari</span> Visitors
                </h1>
            </div>
            <div class="col-lg-6">
                <div class="bg-primary h-100 d-flex align-items-center py-4 px-4 px-sm-5">
                    <i class="fa fa-3x fa-mobile-alt text-white"></i>
                    <div class="ms-4">
                        <p class="text-white mb-0">Call for more info</p>
                        <h2 class="text-white mb-0">+012 345 6789</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gy-5 gx-4">
            <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid mb-3" src="img/icon/icon-2.png" alt="Icon" />
                <h5 class="mb-3">Car Parking</h5>
                <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
                    sed diam stet diam sed stet.</span>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <img class="img-fluid mb-3" src="img/icon/icon-3.png" alt="Icon" />
                <h5 class="mb-3">Animal Photos</h5>
                <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
                    sed diam stet diam sed stet.</span>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <img class="img-fluid mb-3" src="img/icon/icon-4.png" alt="Icon" />
                <h5 class="mb-3">Guide Services</h5>
                <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
                    sed diam stet diam sed stet.</span>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <img class="img-fluid mb-3" src="img/icon/icon-5.png" alt="Icon" />
                <h5 class="mb-3">Food & Beverages</h5>
                <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
                    sed diam stet diam sed stet.</span>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid mb-3" src="img/icon/icon-6.png" alt="Icon" />
                <h5 class="mb-3">Zoo Shopping</h5>
                <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
                    sed diam stet diam sed stet.</span>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <img class="img-fluid mb-3" src="img/icon/icon-7.png" alt="Icon" />
                <h5 class="mb-3">Free Hi Speed Wi-Fi</h5>
                <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
                    sed diam stet diam sed stet.</span>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <img class="img-fluid mb-3" src="img/icon/icon-8.png" alt="Icon" />
                <h5 class="mb-3">Play Ground</h5>
                <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
                    sed diam stet diam sed stet.</span>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <img class="img-fluid mb-3" src="img/icon/icon-9.png" alt="Icon" />
                <h5 class="mb-3">Rest House</h5>
                <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
                    sed diam stet diam sed stet.</span>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->
<!-- Animal Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-6">
                <p><span class="text-primary me-2">#</span>Our Animals</p>
                <h1 class="display-5 mb-0">
                    Let`s See Our <span class="text-primary">Zoofari</span> Awsome
                    Animals
                </h1>
            </div>
            <div class="col-lg-6 text-lg-end">
                <a class="btn btn-primary py-3 px-5" href="">Explore More Animals</a>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-4">
                    <div class="col-12">
                        <a class="animal-item" href="img/animal-md-1.jpg" data-lightbox="animal">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/animal-md-1.jpg" alt="" />
                                <div class="animal-text p-4">
                                    <p class="text-white small text-uppercase mb-0">Animal</p>
                                    <h5 class="text-white mb-0">Elephant</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="animal-item" href="img/animal-lg-1.jpg" data-lightbox="animal">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/animal-lg-1.jpg" alt="" />
                                <div class="animal-text p-4">
                                    <p class="text-white small text-uppercase mb-0">Animal</p>
                                    <h5 class="text-white mb-0">Elephant</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="row g-4">
                    <div class="col-12">
                        <a class="animal-item" href="img/animal-lg-2.jpg" data-lightbox="animal">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/animal-lg-2.jpg" alt="" />
                                <div class="animal-text p-4">
                                    <p class="text-white small text-uppercase mb-0">Animal</p>
                                    <h5 class="text-white mb-0">Elephant</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="animal-item" href="img/animal-md-2.jpg" data-lightbox="animal">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/animal-md-2.jpg" alt="" />
                                <div class="animal-text p-4">
                                    <p class="text-white small text-uppercase mb-0">Animal</p>
                                    <h5 class="text-white mb-0">Elephant</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="row g-4">
                    <div class="col-12">
                        <a class="animal-item" href="img/animal-md-3.jpg" data-lightbox="animal">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/animal-md-3.jpg" alt="" />
                                <div class="animal-text p-4">
                                    <p class="text-white small text-uppercase mb-0">Animal</p>
                                    <h5 class="text-white mb-0">Elephant</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="animal-item" href="img/animal-lg-3.jpg" data-lightbox="animal">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/animal-lg-3.jpg" alt="" />
                                <div class="animal-text p-4">
                                    <p class="text-white small text-uppercase mb-0">Animal</p>
                                    <h5 class="text-white mb-0">Elephant</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Animal End -->
@endsection
