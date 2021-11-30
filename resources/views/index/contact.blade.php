@extends('layouts.layout')
@section('title','Contact')

@section('content')
<!-- Contact Us Section Start Here -->
<div class="contact-section padding-tb" style="padding-top: 40px">
    <div class="container">
        {{-- 面包屑导航 --}}
        <div style="margin-bottom:20px;font-size:20px">
            <a href="{{route('home.index')}}" style="color: gray">Home</a>&emsp;>>&emsp;Contact
        </div>
        <div class="contac-top">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-6 col-12">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="icofont-google-map"></i>
                        </div>
                        <div class="contact-details">
                            <p>Sector # 48,123 Street,Melbourn City Australia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-12">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="icofont-phone"></i>
                        </div>
                        <div class="contact-details">
                            <p>+88978-658-125, 0078-98-954 012-859-6510003</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-12">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="icofont-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <p>poultryfarm@gmail.com www.poultryfarm.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contac-bottom">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-12">
                    <div class="location-map">
                        <div id="map">
                            <iframe
                                src="https://map.baidu.com/search/%E4%B8%9C%E6%96%B9%E4%B9%8B%E9%97%A8/@13434720.224849448,3652360.365,18.74z?querytype=s&da_src=shareurl&wd=%E4%B8%9C%E6%96%B9%E4%B9%8B%E9%97%A8&c=224&src=0&pn=0&sug=0&l=17&b=(13433532.488565769,3651803.9590966715;13435806.54751981,3652886.2098098253)&from=webmap&biz_forward=%7B%22scaler%22:2,%22styles%22:%22pl%22%7D&device_ratio=2"
                                allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="contact-form">
                        <form action="#" method="POST" id="commentform" class="comment-form">
                            <input type="text" name="name" class="" placeholder="Name*">
                            <input type="email" name="email" class="" placeholder="Email*">
                            <input type="text" name="subject" class="" placeholder="Subject*">
                            <textarea name="text" id="role" cols="30" rows="9" placeholder="Message*"></textarea>
                            <button type="submit" class="lab-btn">
                                <span>Submit Now</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Us Section ENding Here -->
@endsection


