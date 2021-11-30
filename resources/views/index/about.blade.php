@extends('layouts.layout')
@section('title','About')

@section('content')
<!-- about section start here -->
<section class="about-section bg_img relative padding-tb" style="padding-top: 40px">
    <div class="container">
        {{-- 面包屑导航 --}}
        <div style="margin-bottom:20px;font-size:20px">
            <a href="{{route('home.index')}}" style="color: gray">Home</a>&emsp;>>&emsp;About
        </div>
        <div class="row align-items-center mb-15">
            <div class="col-lg-6 col-12">
                <div class="about-thumb">
                    <img src="{{URL::asset('images/about/01.png')}}" alt="about-thumb">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="about-wrapper">
                    <div class="about-title">
                        <h2><span class="d-lg-block">Welcome to Our Poultry And </span>Egg Farm.</h2>
                        <p>Continually productize compelling quality for packed with elated Productize compelling
                            quality for packed with all elated themv Setting up to website and creating pages.</p>
                    </div>
                    <div class="about-content">
                        <ul class="lab-ul list-group">
                            <li class="list-group-item py-1 px-0 border-none"><i class="icofont-tick-boxed mr-2 color-theme"></i>We are providing different services</li>
                            <li class="list-group-item py-1 px-0 border-none"><i class="icofont-tick-boxed mr-2 color-theme"></i>We are one of leading company</li>
                            <li class="list-group-item py-1 px-0 border-none"><i class="icofont-tick-boxed mr-2 color-theme"></i>Profitability is the primary goal of all business</li>
                            <li class="list-group-item py-1 px-0 border-none"><i class="icofont-tick-boxed mr-2 color-theme"></i>Learn how to grow your Business </li>
                            <li class="list-group-item py-1 px-0 border-none"><i class="icofont-tick-boxed mr-2 color-theme"></i>Professional solutions for your business</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about section ending here -->
@endsection
