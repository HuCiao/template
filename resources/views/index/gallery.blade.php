@extends('layouts.layout')
@section('title','Gallery')

@section('content')
<!-- Gallery  start Here -->
<div class="gallery-2 padding-tb" style="padding-top: 40px">
    <div class="container">
        {{-- 面包屑导航 --}}
        <div style="margin-bottom:20px;font-size:20px">
            <a href="{{route('home.index')}}" style="color: gray">Home</a>&emsp;>>&emsp;Gallery
        </div>
        <div class="row mb-15">
            <div class="col-12">
                <div class="gallery-grid-item">
                    <div class="grid-items">
                        <a href="{{URL::asset('images/gallery/mason/01.jpg')}}" data-rel="lightcase:myCollection:slideshow">
                            <img src="{{URL::asset('images/gallery/mason/01.jpg')}}" alt="gallery-img">
                        </a>
                    </div>
                    <div class="grid-items">
                        <a href="{{URL::asset('images/gallery/mason/02.jpg')}}" data-rel="lightcase:myCollection:slideshow">
                            <img src="{{URL::asset('images/gallery/mason/02.jpg')}}" alt="gallery-img">
                        </a>
                    </div>
                    <div class="grid-items">
                        <a href="{{URL::asset('images/gallery/mason/03.jpg')}}" data-rel="lightcase:myCollection:slideshow">
                            <img src="{{URL::asset('images/gallery/mason/03.jpg')}}" alt="gallery-img">
                        </a>
                    </div>
                    <div class="grid-items">
                        <a href="{{URL::asset('images/gallery/mason/04.jpg')}}" data-rel="lightcase:myCollection:slideshow">
                            <img src="{{URL::asset('images/gallery/mason/04.jpg')}}" alt="gallery-img">
                        </a>
                    </div>
                    <div class="grid-items">
                        <a href="{{URL::asset('images/gallery/mason/05.jpg')}}" data-rel="lightcase:myCollection:slideshow">
                            <img src="{{URL::asset('images/gallery/mason/05.jpg')}}" alt="gallery-img">
                        </a>

                    </div>
                    <div class="grid-items">
                        <a href="{{URL::asset('images/gallery/mason/06.jpg')}}" data-rel="lightcase:myCollection:slideshow">
                            <img src="{{URL::asset('images/gallery/mason/06.jpg')}}" alt="gallery-img">
                        </a>
                    </div>
                    <div class="grid-items">
                        <a href="{{URL::asset('images/gallery/mason/07.jpg')}}" data-rel="lightcase:myCollection:slideshow">
                            <img src="{{URL::asset('images/gallery/mason/07.jpg')}}" alt="gallery-img">
                        </a>
                    </div>
                    <div class="grid-items">
                        <a href="{{URL::asset('images/gallery/mason/08.jpg')}}" data-rel="lightcase:myCollection:slideshow">
                            <img src="{{URL::asset('images/gallery/mason/08.jpg')}}" alt="gallery-img">
                        </a>
                    </div>
                    <div class="grid-items">
                        <a href="{{URL::asset('images/gallery/mason/09.jpg')}}" data-rel="lightcase:myCollection:slideshow">
                            <img src="{{URL::asset('images/gallery/mason/09.jpg')}}" alt="gallery-img">
                        </a>
                    </div>
                    <div class="grid-items">
                        <a href="{{URL::asset('images/gallery/mason/10.jpg')}}" data-rel="lightcase:myCollection:slideshow">
                            <img src="{{URL::asset('images/gallery/mason/10.jpg')}}" alt="gallery-img">
                        </a>
                    </div>
                    <div class="grid-items">
                        <a href="{{URL::asset('images/gallery/mason/11.jpg')}}" data-rel="lightcase:myCollection:slideshow">
                            <img src="{{URL::asset('images/gallery/mason/11.jpg')}}" alt="gallery-img">
                        </a>
                    </div>
                    <div class="grid-items">
                        <a href="{{URL::asset('images/gallery/mason/12.jpg')}}" data-rel="lightcase:myCollection:slideshow">
                            <img src="{{URL::asset('images/gallery/mason/12.jpg')}}" alt="gallery-img">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Gallery  ending Here -->
@endsection
