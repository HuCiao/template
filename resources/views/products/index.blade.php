@extends('layouts.layout')
@section('title','Products')

@section('content')
<!-- shop page Section Start Here -->
<div class="shop-page padding-tb" style="padding-top: 40px">
    <div class="container">
        {{-- 面包屑导航 --}}
        <div style="margin-bottom:20px;font-size:20px">
            <a href="{{route('home.index')}}" style="color: gray">Home</a>&emsp;>>&emsp;Products
        </div>
        <div class="section-wrapper">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-12">
                    <article>
                        <div class="shop-title d-flex flex-wrap justify-content-between bg-ash">
                            <p>Showing 01 - 12 of {!! $products->total() !!} Results</p>
                            <div class="product-view-mode">
                                <a class="active" data-target="grids"><i class="icofont-ghost"></i></a>
                                <a data-target="lists"><i class="icofont-listing-box"></i></a>
                            </div>
                        </div>

                        <div class="shop-product-wrap grids row justify-content-center">
                            @foreach($products as $product)
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="product-item" style="width: 262.5px; height:382.6px">
                                    <div class="product-thumb">
                                        <img src="{{ $product->image_url }}" alt="{{ $product->title }}" style="width: 240px; height:239px;">
                                        <div class="product-action-link">
                                            <a href="{{ $product->image_url }}" data-rel="lightcase">
                                                <i class="icofont-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h6>
                                            <a href="{{ route('products.show', ['product' => $product->id]) }}" style="overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">
                                                {{$product->title}}
                                            </a>
                                        </h6>
                                        <div class="rating mb-1" style="color: orange;">
                                            {{ str_repeat('★',floor($product->rating)) }}
                                        </div>
                                        <h6>{{ $product->price }}</h6>
                                    </div>
                                </div>
                                <div class="product-list-item">
                                    <div class="product-thumb">
                                        <img src="{{ $product->image_url }}" alt="{{ $product->title }}">
                                        <div class="product-action-link">
                                            <a href="{{ $product->image_url }}" data-rel="lightcase">
                                                <i class="icofont-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h6><a href="{{ route('products.show', ['product' => $product->id]) }}">{{$product->title}}</a></h6>
                                        <div class="rating mb-1" style="color: orange;">
                                            {{ str_repeat('★',floor($product->rating)) }}
                                        </div>
                                        <h6>
                                            {{ $product->price }}
                                        </h6>
                                        <p>{!! $product->introduction!!}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="paginations">
                            <ul class="lab-ul d-flex flex-wrap justify-content-center">
                               {{$products->links()}}
                            </ul>
                        </div>

                    </article>
                </div>
                <div class="col-lg-3 col-md-7 col-12">
                    <aside>
                        <div class="widget widget-search bg-ash px-3">
                            <div class="widget-header">
                                <h5>Search keywords</h5>
                            </div>
                            <form action="/" class="search-wrapper">
                                <input type="text" name="s" placeholder="Your Search...">
                                <button type="submit"><i class="icofont-search-2"></i></button>
                            </form>
                        </div>

                        <div class="widget widget-category bg-ash px-3">
                            <div class="widget-header">
                                <h5>All Categories</h5>
                            </div>
                            <div class="widget-wrapper">
                                <ul class="lab-ul shop-menu">
                                    <li>
                                        <a href="#0">Apple</a>
                                        <ul class="lab-ul shop-submenu">
                                            <li><a>Apple 1</a></li>
                                            <li><a>Apple 2</a></li>
                                            <li><a>Apple 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#0">Orange</a>
                                        <ul class="lab-ul shop-submenu">
                                            <li><a>Orange 1</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#0">Tomato</a>
                                        <ul class="lab-ul shop-submenu">
                                            <li><a>Tomato 1</a></li>
                                            <li><a>Tomato 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#0">Honey</a>
                                        <ul class="lab-ul shop-submenu">
                                            <li><a>Honey 1</a></li>
                                            <li><a>Honey 2</a></li>
                                            <li><a>Honey 3</a></li>
                                            <li><a>Honey 4</a></li>
                                            <li><a>Honey 5</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#0">Banana</a>
                                        <ul class="lab-ul shop-submenu">
                                            <li><a>Banana 1</a></li>
                                            <li><a>Banana 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#0">Blueberry</a>
                                        <ul class="lab-ul shop-submenu">
                                            <li><a>Blueberry 1</a></li>
                                            <li><a>Blueberry 2</a></li>
                                            <li><a>Blueberry 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#0">Lettuce</a>
                                        <ul class="lab-ul shop-submenu">
                                            <li><a>Lettuce 1</a></li>
                                            <li><a>Lettuce 2</a></li>
                                            <li><a>Lettuce 3</a></li>
                                            <li><a>Lettuce 4</a></li>
                                            <li><a>Lettuce 5</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="widget widget-post bg-ash px-3">
                            <div class="widget-header">
                                <h5>Latests Products</h5>
                            </div>
                            <ul class="lab-ul widget-wrapper">
                                @foreach ($latest as $product)
                                <li class="d-flex flex-wrap justify-content-between">
                                    <div class="post-thumb">
                                        <a href="{{ route('products.show', ['product' => $product->id]) }}"><img src="{{ $product->image_url }}" alt="product"></a>
                                    </div>
                                    <div class="post-content">
                                        <a href="{{ route('products.show', ['product' => $product->id]) }}">
                                            <h6>{{ $product->title }}</h6>
                                        </a>
                                        <div class="rating" style="color: orange;">
                                            {{ str_repeat('★',floor($product->rating)) }}
                                        </div>
                                        <h6>{{ $product->price }}</h6>
                                    </div>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- shop page Section ENding Here -->
@endsection



