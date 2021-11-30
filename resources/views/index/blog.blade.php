@extends('layouts.layout')
@section('title','Blogs')

@section('content')

<!-- Blog Section Start Here -->
<div class="blog-section blog-page padding-tb" style="padding-top: 40px">
    {{-- 面包屑导航 --}}
    <div style="margin-bottom:20px;font-size:20px">
        <a href="{{route('home.index')}}" style="color: gray">Home</a>&emsp;>>&emsp;Blog
    </div>
    <div class="container">
        <div class="section-wrapper">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-12">
                    <article>
                        @foreach ($blogs as $blog)
                        <div class="post-item-2">
                            <div class="post-inner">
                                <div class="post-thumb">
                                    <a href="{{ route('blog.detail', ['blog' => $blog->id]) }}">
                                        <img src="{{ $blog->image_url }}" alt="{{ $blog->title }}">
                                    </a>
                                </div>
                                <div class="post-content">
                                    <ul class="lab-ul post-date">
                                        <li><span>{{ $blog->created_at }}</span></li>
                                        <li><span>By {{ $blog->author }}</span></li>
                                    </ul>
                                    <a href="{{ route('blog.detail', ['blog' => $blog->id]) }}">
                                        <h3>{{ $blog->title }}</h3>
                                    </a>
                                    <p>{{ $blog->introduction }}</p>
                                    <div class="d-flex flex-wrap justify-content-between more-com">
                                        <div class="text-btn">
                                            <a href="{{ route('blog.detail', ['blog' => $blog->id]) }}"><span>Read More<i
                                                        class="fa fa-angle-double-right"></i></span></a>
                                        </div>
                                        <div class="comment-visi">
                                            <span>{{ $blog->view_count}} View</span>
                                            <span><i class="far fa-comment"></i> {{ $blog->commemt_count}} Comment</span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach


                        <div class="paginations">
                            <ul class="lab-ul d-flex flex-wrap justify-content-center">
                               {{$blogs->links()}}
                            </ul>
                        </div>

                    </article>
                </div>
                <div class="col-lg-3 col-md-7 col-12">
                    <aside>
                        <div class="widget widget-author">
                            <div class="widget-wrapper">
                                <div class="admin-thumb">
                                    <img src="{{URL::asset('images/blog/author.png')}}" alt="author">
                                </div>
                                <div class="admin-content">
                                    <h5>Sahjahan Sagor</h5>
                                    <p>Authoritatively restore orthog ips ineer installed Intrinsiclyts imperatives.
                                    </p>
                                    <div class="scocial-media">
                                        <a  class="twitter"><i class="icofont-twitter"></i></a>
                                        <a  class="behance"><i class="icofont-behance"></i></a>
                                        <a  class="instagram"><i class="icofont-instagram"></i></a>
                                        <a  class="vimeo"><i class="icofont-vimeo"></i></a>
                                        <a  class="linkedin"><i class="icofont-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget widget-category">
                            <div class="widget-header">
                                <h5>Post Categories</h5>
                            </div>
                            <ul class="lab-ul widget-wrapper">
                                <li>
                                    <a  class="d-flex flex-wrap justify-content-between"><span>Show
                                            all</span><span>(148)</span></a>
                                </li>
                                <li>
                                    <a
                                        class="d-flex flex-wrap justify-content-between"><span>Business</span><span>(20)</span></a>
                                </li>
                                <li>
                                    <a
                                        class="d-flex flex-wrap justify-content-between"><span>Creative</span><span>(25)</span></a>
                                </li>
                                <li>
                                    <a
                                        class="d-flex flex-wrap justify-content-between"><span>Inspiation</span><span>(30)</span></a>
                                </li>
                                <li>
                                    <a
                                        class="d-flex flex-wrap justify-content-between"><span>News</span><span>(28)</span></a>
                                </li>
                                <li>
                                    <a
                                        class="d-flex flex-wrap justify-content-between"><span>Photography</span><span>(20)</span></a>
                                </li>
                                <li>
                                    <a
                                        class="d-flex flex-wrap justify-content-between"><span>Smart</span><span>(25)</span></a>
                                </li>
                            </ul>
                        </div>

                        <div class="widget widget-post">
                            <div class="widget-header">
                                <h5>Recent Post</h5>
                            </div>
                            <ul class="lab-ul widget-wrapper">
                                <li class="d-flex flex-wrap justify-content-between">
                                    <div class="post-thumb">
                                        <a href="blog-single.html"><img src="{{URL::asset('images/product/01.jpg')}}"
                                                alt="product"></a>
                                    </div>
                                    <div class="post-content">
                                        <a href="blog-single.html">
                                            <h6>Conveniently utilize premier metho.</h6>
                                        </a>
                                        <p>04 February 2019</p>
                                    </div>
                                </li>
                                <li class="d-flex flex-wrap justify-content-between">
                                    <div class="post-thumb">
                                        <a href="blog-single.html"><img src="{{URL::asset('images/product/02.jpg')}}"
                                                alt="product"></a>
                                    </div>
                                    <div class="post-content">
                                        <a href="blog-single.html">
                                            <h6>Seamlessly fashion customiz before.</h6>
                                        </a>
                                        <p>04 February 2019</p>
                                    </div>
                                </li>
                                <li class="d-flex flex-wrap justify-content-between">
                                    <div class="post-thumb">
                                        <a href="blog-single.html"><img src="{{URL::asset('images/product/03.jpg')}}"
                                                alt="product"></a>
                                    </div>
                                    <div class="post-content">
                                        <a href="blog-single.html">
                                            <h6>Conveniently utilize premier metho.</h6>
                                        </a>
                                        <p>04 February 2019</p>
                                    </div>
                                </li>
                                <li class="d-flex flex-wrap justify-content-between">
                                    <div class="post-thumb">
                                        <a href="blog-single.html"><img src="{{URL::asset('images/product/04.jpg')}}"
                                                alt="product"></a>
                                    </div>
                                    <div class="post-content">
                                        <a href="blog-single.html">
                                            <h6>Seamlessly fashion customiz before.</h6>
                                        </a>
                                        <p>04 February 2019</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="widget widget-instagram">
                            <div class="widget-header">
                                <h5>Instagram</h5>
                            </div>
                            <ul class="lab-ul widget-wrapper d-flex flex-wrap justify-content-center">
                                <li><a ><img src="{{URL::asset('images/team/01.jpg')}}" alt="team"></a></li>
                                <li><a ><img src="{{URL::asset('images/team/02.jpg')}}" alt="team"></a></li>
                                <li><a ><img src="{{URL::asset('images/team/03.jpg')}}" alt="team"></a></li>
                                <li><a ><img src="{{URL::asset('images/team/04.jpg')}}" alt="team"></a></li>
                            </ul>
                        </div>

                        <div class="widget widget-tags">
                            <div class="widget-header">
                                <h5>Featured tags</h5>
                            </div>
                            <ul class="lab-ul widget-wrapper">
                                <li><a >envato</a></li>
                                <li><a >themeforest</a></li>
                                <li><a >codecanyon</a></li>
                                <li><a >videohive</a></li>
                                <li><a >audiojungle</a></li>
                                <li><a >3docean</a></li>
                                <li><a >envato</a></li>
                                <li><a >themeforest</a></li>
                                <li><a >codecanyon</a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Section ENding Here -->

@endsection

