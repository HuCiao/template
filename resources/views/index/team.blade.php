@extends('layouts.layout')
@section('title','Team Member')

@section('content')

<!-- team section start here -->
<section class="team-section padding-tb" style="padding-top: 40px">
    <div class="container">
        {{-- 面包屑导航 --}}
        <div style="margin-bottom:20px;font-size:20px">
            <a href="{{route('home.index')}}" style="color: gray">Home</a>&emsp;>>&emsp;Team
        </div>
        <div class="row">
            <div class="col-12">
                <div class="section-wrapper">
                    <div class="row justify-content-center">
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="card p-2 mb-4 text-center border-none style-2">
                                <img src="{{URL::asset('images/team/01.jpg')}}" class="card-img-top" alt="product">
                                <div class="card-body">
                                    <a >
                                        <h6 class="card-title mb-0">Alisha Kabir</h6>
                                    </a>
                                    <p class="card-text mb-2">Marketer</p>
                                    <div class="social-share">
                                        <a  class="m-1 twitter"><i class="icofont-twitter"></i></a>
                                        <a  class="m-1 behance"><i class="icofont-behance"></i></a>
                                        <a  class="m-1 instagram"><i class="icofont-instagram"></i></a>
                                        <a  class="m-1 vimeo"><i class="icofont-vimeo"></i></a>
                                        <a  class="m-1 linkedin"><i class="icofont-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="card p-2 mb-4 text-center border-none style-2">
                                <img src="{{URL::asset('images/team/02.jpg')}}" class="card-img-top" alt="product">
                                <div class="card-body">
                                    <a >
                                        <h6 class="card-title mb-0">Sahjahan Sagor</h6>
                                    </a>
                                    <p class="card-text mb-2">Founder & Ceo</p>
                                    <div class="social-share">
                                        <a  class="m-1 twitter"><i class="icofont-twitter"></i></a>
                                        <a  class="m-1 behance"><i class="icofont-behance"></i></a>
                                        <a  class="m-1 instagram"><i class="icofont-instagram"></i></a>
                                        <a  class="m-1 vimeo"><i class="icofont-vimeo"></i></a>
                                        <a  class="m-1 linkedin"><i class="icofont-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="card p-2 mb-4 text-center border-none style-2">
                                <img src="{{URL::asset('images/team/03.jpg')}}" class="card-img-top" alt="product">
                                <div class="card-body">
                                    <a >
                                        <h6 class="card-title mb-0">Lubna Smith</h6>
                                    </a>
                                    <p class="card-text mb-2">Marketer</p>
                                    <div class="social-share">
                                        <a  class="m-1 twitter"><i class="icofont-twitter"></i></a>
                                        <a  class="m-1 behance"><i class="icofont-behance"></i></a>
                                        <a  class="m-1 instagram"><i class="icofont-instagram"></i></a>
                                        <a  class="m-1 vimeo"><i class="icofont-vimeo"></i></a>
                                        <a  class="m-1 linkedin"><i class="icofont-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="card p-2 mb-4 text-center border-none style-2">
                                <img src="{{URL::asset('images/team/04.jpg')}}" class="card-img-top" alt="product">
                                <div class="card-body">
                                    <a >
                                        <h6 class="card-title mb-0">Jeson Roy</h6>
                                    </a>
                                    <p class="card-text mb-2">Manager</p>
                                    <div class="social-share">
                                        <a  class="m-1 twitter"><i class="icofont-twitter"></i></a>
                                        <a  class="m-1 behance"><i class="icofont-behance"></i></a>
                                        <a  class="m-1 instagram"><i class="icofont-instagram"></i></a>
                                        <a  class="m-1 vimeo"><i class="icofont-vimeo"></i></a>
                                        <a  class="m-1 linkedin"><i class="icofont-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="card p-2 mb-4 text-center border-none style-2">
                                <img src="{{URL::asset('images/team/04.jpg')}}" class="card-img-top" alt="product">
                                <div class="card-body">
                                    <a >
                                        <h6 class="card-title mb-0">anuka Kabir</h6>
                                    </a>
                                    <p class="card-text mb-2">Marketer</p>
                                    <div class="social-share">
                                        <a  class="m-1 twitter"><i class="icofont-twitter"></i></a>
                                        <a  class="m-1 behance"><i class="icofont-behance"></i></a>
                                        <a  class="m-1 instagram"><i class="icofont-instagram"></i></a>
                                        <a  class="m-1 vimeo"><i class="icofont-vimeo"></i></a>
                                        <a  class="m-1 linkedin"><i class="icofont-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="card p-2 mb-4 text-center border-none style-2">
                                <img src="{{URL::asset('images/team/03.jpg')}}" class="card-img-top" alt="product">
                                <div class="card-body">
                                    <a >
                                        <h6 class="card-title mb-0">Jesan Hanri</h6>
                                    </a>
                                    <p class="card-text mb-2">Founder & Ceo</p>
                                    <div class="social-share">
                                        <a  class="m-1 twitter"><i class="icofont-twitter"></i></a>
                                        <a  class="m-1 behance"><i class="icofont-behance"></i></a>
                                        <a  class="m-1 instagram"><i class="icofont-instagram"></i></a>
                                        <a  class="m-1 vimeo"><i class="icofont-vimeo"></i></a>
                                        <a  class="m-1 linkedin"><i class="icofont-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="card p-2 mb-4 text-center border-none style-2">
                                <img src="{{URL::asset('images/team/02.jpg')}}" class="card-img-top" alt="product">
                                <div class="card-body">
                                    <a >
                                        <h6 class="card-title mb-0">Subrina Kabir</h6>
                                    </a>
                                    <p class="card-text mb-2">Marketer</p>
                                    <div class="social-share">
                                        <a  class="m-1 twitter"><i class="icofont-twitter"></i></a>
                                        <a  class="m-1 behance"><i class="icofont-behance"></i></a>
                                        <a  class="m-1 instagram"><i class="icofont-instagram"></i></a>
                                        <a  class="m-1 vimeo"><i class="icofont-vimeo"></i></a>
                                        <a  class="m-1 linkedin"><i class="icofont-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="card p-2 mb-4 text-center border-none style-2">
                                <img src="{{URL::asset('images/team/01.jpg')}}" class="card-img-top" alt="product">
                                <div class="card-body">
                                    <a >
                                        <h6 class="card-title mb-0">Jeson Joy</h6>
                                    </a>
                                    <p class="card-text mb-2">Manager</p>
                                    <div class="social-share">
                                        <a  class="m-1 twitter"><i class="icofont-twitter"></i></a>
                                        <a  class="m-1 behance"><i class="icofont-behance"></i></a>
                                        <a  class="m-1 instagram"><i class="icofont-instagram"></i></a>
                                        <a  class="m-1 vimeo"><i class="icofont-vimeo"></i></a>
                                        <a  class="m-1 linkedin"><i class="icofont-linkedin"></i></a>
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
<!-- team section ending here -->

@endsection
