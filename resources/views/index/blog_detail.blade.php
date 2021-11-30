@extends('layouts.layout')
@section('title',"ss")

@section('content')
<!-- Blog Section Start Here -->
<div class="blog-section blog-single padding-tb" style="padding-top: 40px">
    <div class="container">
        {{-- 面包屑导航 --}}
        <div style="margin-bottom:20px;font-size:20px">
            <a href="{{route('home.index')}}" style="color: gray">Home</a>&emsp;>>&emsp;
            <a href="{{route('home.blog')}}" style="color: gray">Blog</a>&emsp;>>&emsp;Detail
        </div>
        <div class="section-wrapper">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-12">
                    <article>
                        <div class="post-item-2">
                            <div class="post-inner">
                                <div class="post-thumb">
                                    <img src="{{ $blog->image_url }}" alt="blog">
                                </div>
                                <div class="post-content">
                                    <h4>{{ $blog->title }}</h4>
                                    <div class="meta-post">
                                        <p>
                                            <span class="post-date">Posted On: {{ $blog->created_at }}</span>
                                            <span class="admin-name">Admin {{ $blog->author }}</span>
                                            <span class="post-like">{{ $blog->view_count }} Viewed</span>
                                            <span class="comment-name">{{ $blog->comment_count }} comments</span>
                                        </p>
                                    </div>
                                    <div class="qute-content text-center">
                                        <blockquote>
                                            <p>{{ $blog->introduction }}</p>
                                            <cite>
                                                <a>{{ $blog->author }}</a>
                                            </cite>
                                        </blockquote>
                                    </div>
                                    <p>{!! $blog->content !!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="tags-social">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="tags">
                                        <span>Tags:</span>
                                        <ul class="lab-ul">
                                            <li> {{$cate->name}}</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="scocial">
                                        <span>Share:</span>
                                        <div class="scocial-media">
                                            <a href="http://www.twitter.com" class="twitter"><i class="icofont-twitter"></i></a>
                                            <a href="http://www.instagram.com" class="instagram"><i class="icofont-instagram"></i></a>
                                            <a href="http://www.vimeo.com/" class="vimeo"><i class="icofont-vimeo"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="authors">
                            <div class="author-content">
                                <h6>{{ $blog->author }}</h6>
                                <p>Competently conceptualize alternative synergy and technically sound niche
                                    markets. Efficiently impact technically sound outsourcing rathe
                                    tnclicks-and-mortar best practices.</p>
                                <div class="scocial-media">
                                    <a href="http://www.twitter.com" class="twitter"><i class="icofont-twitter"></i></a>
                                    <a href="http://www.instagram.com" class="instagram"><i class="icofont-instagram"></i></a>
                                    <a href="http://www.vimeo.com/" class="vimeo"><i class="icofont-vimeo"></i></a>
                                </div>
                            </div>
                        </div>

                        <div id="comments" class="comments">
                            <h4 class="title-border">{{ $blog->comment_count }} Comment</h4>
                            <hr size="2">
                            <ul class="lab-ul comment-list">
                                <li class="comment" id="li-comment-1">
                                    @foreach ($comments as $comment)
                                    <div class="com-content">
                                        <div class="com-title">
                                            <div class="com-title-meta">
                                                <h6><a rel="external nofollow" class="url">{{ $comment->reviewer }}</a></h6>
                                                <span> {{ $comment->created_at}} </span>
                                            </div>
                                        </div>
                                        <p>{{$comment->comments}}</p>
                                        <div class="reply-btn"></div>
                                    </div>
                                    @endforeach
                                </li>
                            </ul>
                        </div>
                        <div id="respond" class="comment-respond">
                            <h4 class="title-border">Leave a Comment</h4>
                            <div class="add-comment">
                                <form action="{{route('comments.add')}}" method="POST" id="commentform" class="comment-form">
                                    @csrf
                                    <input name="reviewer" type="text" value="" placeholder="reviewer">
                                    <input type="hidden" name="blog_id" value="{{$blog->id}}">
                                    <textarea id="comment-reply" name="comments" rows="7"
                                        placeholder="Type Here Your Comment*"></textarea>
                                    <button type="submit" class="lab-btn"><span>Send Comment</span></button>
                                </form>
                            </div>
                        </div>

                        <div class="rel-product">
                            <h4 class="title-border">Related Post</h4>
                            <div class="section-wrapper">
                                <div class="row no-gutters justify-content-center">
                                    @foreach($related as $blog)
                                    <div class="col-xl-4 col-md-6 col-12">
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <img src="{{ $blog->image_url }}" alt="food-product">
                                            </div>
                                            <div class="product-content">
                                                <a href="{{ route('blog.detail', ['blog' => $blog->id]) }}">
                                                    <h6>{{ $blog->title }}</h6>
                                                </a>
                                                <a class="commtents">{{ $blog->comment_count }} Comments</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-3 col-md-7 col-12">
                    <aside>
                        <div class="widget widget-author">
                            <div class="widget-wrapper">
                                <div class="admin-content">
                                    <h5>{{ $blog->author}}</h5>
                                    <p>Authoritatively restore orthog ips ineer installed Intrinsiclyts imperatives.
                                    </p>
                                    <div class="scocial-media">
                                        <a href="http://www.twitter.com" class="twitter"><i class="icofont-twitter"></i></a>
                                        <a href="http://www.instagram.com" class="instagram"><i class="icofont-instagram"></i></a>
                                        <a href="http://www.vimeo.com/" class="vimeo"><i class="icofont-vimeo"></i></a>
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
                                    <a class="d-flex flex-wrap justify-content-between"><span>Show
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
                                @foreach($recents as $blog)
                                <li class="d-flex flex-wrap justify-content-between">
                                    <div class="post-thumb">
                                        <a href="{{ route('blog.detail', ['blog' => $blog->id]) }}"><img src="{{$blog->image}}"
                                                alt="{{$blog->title}}"></a>
                                    </div>
                                    <div class="post-content">
                                        <a href="blog-single.html">
                                            <h6>{{$blog->title}}</h6>
                                        </a>
                                        <p>{{$blog->created_at}}</p>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="widget widget-instagram">
                            <div class="widget-header">
                                <h5>instagram</h5>
                            </div>
                            <ul class="lab-ul widget-wrapper d-flex flex-wrap justify-content-center">
                                <li><a><img src="{{URL::asset('images/team/01.jpg')}}" alt="team"></a></li>
                                <li><a><img src="{{URL::asset('images/team/02.jpg')}}" alt="team"></a></li>
                                <li><a><img src="{{URL::asset('images/team/03.jpg')}}" alt="team"></a></li>
                                <li><a><img src="{{URL::asset('images/team/04.jpg')}}" alt="team"></a></li>
                            </ul>
                        </div>

                        <div class="widget widget-tags">
                            <div class="widget-header">
                                <h5>top tags</h5>
                            </div>
                            <ul class="lab-ul widget-wrapper">
                                <li><a>envato</a></li>
                                <li><a>themeforest</a></li>
                                <li><a>codecanyon</a></li>
                                <li><a>videohive</a></li>
                                <li><a>audiojungle</a></li>
                                <li><a>3docean</a></li>
                                <li><a>envato</a></li>
                                <li><a>themeforest</a></li>
                                <li><a>codecanyon</a></li>
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

