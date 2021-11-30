@extends('layouts.layout')

@section('content')
<!-- Banner Section Start Here -->
<section class="banner">
    <div class="banner-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="banner-slider-part"
                    style="background-image: url({{URL::asset('images/banner/bg-images/01.jpg')}});">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row flex-row-reverse justify-content-center align-items-center">
                            <div class="col-12">
                                <div class="banner-content">
                                    <h1 class="banner-title"><B class="d-lg-block">Fresh Killed Poultry </B>
                                        Chickens Specialty Game Meats
                                        Eggs And More!!! </h1>
                                    <a class="lab-btn"><span>DISCOVER NOW</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="banner-slider-part"
                    style="background-image: url({{URL::asset('images/banner/bg-images/02.jpg')}});">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row flex-row-reverse justify-content-center align-items-center">
                            <div class="col-12">
                                <div class="banner-content">
                                    <h1 class="banner-title"><B class="d-lg-block">Fresh Killed Poultry </B>
                                        Chickens Specialty Game Meats
                                        Eggs And More!!! </h1>
                                    <a class="lab-btn"><span>DISCOVER NOW</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="banner-slider-part"
                    style="background-image: url({{URL::asset('images/banner/bg-images/01.jpg')}});">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row flex-row-reverse justify-content-center align-items-center">
                            <div class="col-12">
                                <div class="banner-content">
                                    <h1 class="banner-title"><B class="d-lg-block">Fresh Killed Poultry </B>
                                        Chickens Specialty Game Meats
                                        Eggs And More!!! </h1>
                                    <a class="lab-btn"><span>DISCOVER NOW</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<!-- Banner Section Ending Here -->

<!-- about section start here -->
<section class="about-section relative padding-tb">
    <div class="container">
        <div class="row align-items-center mb-15">
            <div class="col-lg-6 col-12">
                <div class="about-thumb">
                    <img src="{{URL::asset('images/about/01.png')}}" alt="about-thumb')}}">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="about-wrapper p-0">
                    <div class="about-title">
                        <h2><span class="d-lg-block"> Welcome to Our Poultry And </span>Egg Farm.</h2>
                        <p>Continually productize compelling quality for packed with Elated productize compelling
                            quality for packed with all Elated ThemSetting up to website and creating pages.</p>
                    </div>
                    <div class="about-content">
                        <ul class="lab-ul list-group">
                            <li class="list-group-item py-1 px-0 border-none"><i class="icofont-tick-boxed mr-2 color-theme"></i>We are
                                providing different
                                services</li>
                            <li class="list-group-item py-1 px-0 border-none"><i class="icofont-tick-boxed mr-2 color-theme"></i>We are one
                                of leading company
                            </li>
                            <li class="list-group-item py-1 px-0 border-none"><i
                                    class="icofont-tick-boxed mr-2 color-theme"></i>Profitability is the primary
                                goal of all business</li>
                            <li class="list-group-item py-1 px-0 border-none"><i class="icofont-tick-boxed mr-2 color-theme"></i>Learn how
                                to grow your Business
                            </li>
                            <li class="list-group-item py-1 px-0 border-none"><i
                                    class="icofont-tick-boxed mr-2 color-theme"></i>Professional solutions for your
                                business</li>
                        </ul>
                        <a href="{{route('home.about')}}" class="lab-btn mt-4"><span>Read More</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about section ending here -->

<!-- product category section start here -->
<section class="product-section relative padding-tb bg-ash">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-header">
                    <h3>Poultry Farm Products</h3>
                    <p>Conveniently customize proactive web services for leveraged
                        interfaces without Globally </p>
                </div>
            </div>
            <div class="col-12">
                <div class="section-wrapper">
                    <div class="row justify-content-center">
                        @foreach ($latest as $product)
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="mb-4 text-center bg-ash border-none relative" style="background-color: #fff">
                                <img src="{{$product->image_url}}" class="card-img-top mb-2" alt="{{ $product->title }}">
                                <div class="card-body">
                                    <div class="rating mb-2" style="color: orange;">
                                        {{ str_repeat('★',floor($product->rating)) }}
                                    </div>
                                    <a href="{{ route('products.show', ['product' => $product->id]) }}">
                                        <h6 class="card-title">{{ $product->title }}</h6>
                                    </a>
                                    <h6 class="product-price"> <span class="d-price">{{ $product->price }}</span> <del>{{ $product->price * 1.5 }}</del>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <div class="text-center mt-3">
                        <a href="{{route('products.index')}}" class="lab-btn"><span>Shop Now</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product category section ending here -->

<!-- service section start here -->
<section class="service-section padding-tb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-header">
                    <h3>Poultry Farm Services</h3>
                    <p>Conveniently customize proactive web services for leveraged
                        interfaces without Globally </p>
                </div>
            </div>
            <div class="col-12">
                <div class="service-content">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="lab-item service-item">
                                <div class="lab-inner p-4 mb-4 text-left">
                                    <div class="service-top d-flex align-items-center mb-4">
                                        <div class="st-thumb mr-3">
                                            <img src="{{URL::asset('images/service/01.png')}}" alt="service image">
                                        </div>
                                        <div class="st-content mt-2">
                                            <a>
                                                <h6>Alternative egg</h6>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="service-bottom">
                                        <p>Continually aggregate frictionle enthusias generate user friendly vortals
                                            empowered without globally results.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="lab-item service-item">
                                <div class="lab-inner p-4 mb-4 text-left">
                                    <div class="service-top d-flex align-items-center mb-4">
                                        <div class="st-thumb mr-3">
                                            <img src="{{URL::asset('images/service/02.png')}}" alt="service image">
                                        </div>
                                        <div class="st-content mt-2">
                                            <a>
                                                <h6>Poultry Cages</h6>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="service-bottom">
                                        <p>Continually aggregate frictionle enthusias generate user friendly vortals
                                            empowered without globally results.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="lab-item service-item">
                                <div class="lab-inner p-4 mb-4 text-left">
                                    <div class="service-top d-flex align-items-center mb-4">
                                        <div class="st-thumb mr-3">
                                            <img src="{{URL::asset('images/service/03.png')}}" alt="service image">
                                        </div>
                                        <div class="st-content mt-2">
                                            <a>
                                                <h6>Breeder Management</h6>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="service-bottom">
                                        <p>Continually aggregate frictionle enthusias generate user friendly vortals
                                            empowered without globally results.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="lab-item service-item">
                                <div class="lab-inner p-4 mb-4 text-left">
                                    <div class="service-top d-flex align-items-center mb-4">
                                        <div class="st-thumb mr-3">
                                            <img src="{{URL::asset('images/service/04.png')}}" alt="service image">
                                        </div>
                                        <div class="st-content mt-2">
                                            <a>
                                                <h6>Poultry Climate</h6>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="service-bottom">
                                        <p>Continually aggregate frictionle enthusias generate user friendly vortals
                                            empowered without globally results.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="lab-item service-item">
                                <div class="lab-inner p-4 mb-4 text-left">
                                    <div class="service-top d-flex align-items-center mb-4">
                                        <div class="st-thumb mr-3">
                                            <img src="{{URL::asset('images/service/05.png')}}" alt="service image">
                                        </div>
                                        <div class="st-content mt-2">
                                            <a>
                                                <h6>Residue Teatment</h6>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="service-bottom">
                                        <p>Continually aggregate frictionle enthusias generate user friendly vortals
                                            empowered without globally results.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="lab-item service-item">
                                <div class="lab-inner p-4 mb-4 text-left">
                                    <div class="service-top d-flex align-items-center mb-4">
                                        <div class="st-thumb mr-3">
                                            <img src="{{URL::asset('images/service/06.png')}}" alt="service image">
                                        </div>
                                        <div class="st-content mt-2">
                                            <a>
                                                <h6>Exhaust air Treatment</h6>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="service-bottom">
                                        <p>Continually aggregate frictionle enthusias generate user friendly vortals
                                            empowered without globally results.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- service section ends here -->

<!-- Gallery section start here -->
<section class="gallery-section padding-tb bg-ash">
    <div class="container-fluid p-0 m-0">
        <div class="row">
            <div class="col-12">
                <div class="section-header">
                    <h3>Poultry Farm Gallery</h3>
                    <p>Conveniently customize proactive web services for leveraged
                        interfaces without Globally </p>
                </div>
            </div>
            <div class="col-12">
                <div class="gallery-content">
                    <div class="gallery-grid text-center">
                        @foreach ($hot as $product)
                        <a href="{{ route('products.show', ['product' => $product->id]) }}" data-rel="lightcase:myCollection:slideshow" class="grid-image">
                            <img src="{{$product->image_url}}" alt="{{$product->title}}">
                        </a>
                        @endforeach
                    </div>
                    <div class="gallery-btn text-center mt-5">
                        <a class="lab-btn"><span>Load Gallery</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Gallery section ends here -->


<!-- testimonial Section start here -->
<section class="testimonial-section padding-tb bg-ash">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-header">
                    <h3>What Client Say Our Poultry Farm</h3>
                    <p>Conveniently customize proactive web services for leveraged
                        interfaces without Globally </p>
                </div>
            </div>
            <div class="col-12">
                <div class="testimonial-content">
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="lab-item testi-item-2 mb-3">
                                <div class="lab-inner">
                                    <div class="testi-top">
                                        <div class="testi-t-thumb">
                                            <img src="{{URL::asset('images/testimonial/01.jpg')}}" alt="author-image">
                                        </div>
                                        <div class="testi-t-content">
                                            <a>
                                                <h6>Jeson smith</h6>
                                            </a>
                                            <p>Founder & CEO</p>
                                            <div class="rating">
                                                <span><a><i class="far fa-star"></i></a></span>
                                                <span><a><i class="far fa-star"></i></a></span>
                                                <span><a><i class="far fa-star"></i></a></span>
                                                <span><a><i class="far fa-star"></i></a></span>
                                                <span><a><i class="far fa-star"></i></a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testi-bottom">
                                        <p><img class="q1" src="{{URL::asset('images/testimonial/q1.png')}}" alt='"'>
                                            Continually Onceptualizef Technically invs
                                            Professionally monetizeturkeyf Testingdu
                                            Frofessionally oe-enablfunctaizede-come
                                            rce Onceptualize Technically initiatives.
                                            <img class="q2" src="{{URL::asset('images/testimonial/q2.png')}}" alt='"'>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="lab-item testi-item-2 mb-3">
                                <div class="lab-inner">
                                    <div class="testi-top">
                                        <div class="testi-t-thumb">
                                            <img src="{{URL::asset('images/testimonial/02.jpg')}}" alt="author-image">
                                        </div>
                                        <div class="testi-t-content">
                                            <a>
                                                <h6>Sahjahan Sagor</h6>
                                            </a>
                                            <p>Founder & CEO</p>
                                            <div class="rating">
                                                <span><a><i class="far fa-star"></i></a></span>
                                                <span><a><i class="far fa-star"></i></a></span>
                                                <span><a><i class="far fa-star"></i></a></span>
                                                <span><a><i class="far fa-star"></i></a></span>
                                                <span><a><i class="far fa-star"></i></a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testi-bottom">
                                        <p><img class="q1" src="{{URL::asset('images/testimonial/q1.png')}}" alt='"'>
                                            Continually Onceptualizef Technically invs
                                            Professionally monetizeturkeyf Testingdu
                                            Frofessionally oe-enablfunctaizede-come
                                            rce Onceptualize Technically initiatives.
                                            <img class="q2" src="{{URL::asset('images/testimonial/q2.png')}}" alt='"'>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="lab-item testi-item-2 mb-3">
                                <div class="lab-inner">
                                    <div class="testi-top">
                                        <div class="testi-t-thumb">
                                            <img src="{{URL::asset('images/testimonial/03.jpg')}}" alt="author-image">
                                        </div>
                                        <div class="testi-t-content">
                                            <a>
                                                <h6>Alisha Kabir</h6>
                                            </a>
                                            <p>Founder & CEO</p>
                                            <div class="rating">
                                                <span><a><i class="far fa-star"></i></a></span>
                                                <span><a><i class="far fa-star"></i></a></span>
                                                <span><a><i class="far fa-star"></i></a></span>
                                                <span><a><i class="far fa-star"></i></a></span>
                                                <span><a><i class="far fa-star"></i></a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testi-bottom">
                                        <p><img class="q1" src="{{URL::asset('images/testimonial/q1.png')}}" alt='"'>
                                            Continually Onceptualizef Technically invs
                                            Professionally monetizeturkeyf Testingdu
                                            Frofessionally oe-enablfunctaizede-come
                                            rce Onceptualize Technically initiatives.
                                            <img class="q2" src="{{URL::asset('images/testimonial/q2.png')}}" alt='"'>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial Section end here -->


@endsection
