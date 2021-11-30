@extends('layouts.layout')
@section('title',"$product->title")

@section('content')

<!-- Shop Page Section start here -->
<section class="shop-single padding-tb" style="padding-top: 40px">
    <div class="container">
        {{-- 面包屑导航 --}}
        <div style="margin-bottom:20px;font-size:20px">
            <a href="{{route('home.index')}}" style="color: gray">Home</a>&emsp;>>&emsp;
            <a href="{{route('products.index')}}" style="color: gray">Products</a>&emsp;>>&emsp;Detail
        </div>
        <div class="row justify-content-center mb-15">
            <div class="col-lg-10 col-12 sticky-widget">
                <div class="product-details">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-12">
                            <div class="product-thumb">
                                <div class="swiper-container gallery-top">
                                    <div class="swiper-wrapper">
                                        @foreach($covers as $k=>$image)
                                        <div class="swiper-slide">
                                            <div class="shop-item">
                                                <div class="shop-thumb">
                                                    <img src="{{ $image }}"
                                                        alt="{{ $product->title}}">
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="shop-navigation d-flex flex-wrap">
                                        <div class="shop-nav shop-slider-prev"><i class="icofont-simple-left"></i>
                                        </div>
                                        <div class="shop-nav shop-slider-next"><i class="icofont-simple-right"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-container gallery-thumbs">

                                    <div class="swiper-wrapper">
                                        @foreach($covers as $k=>$image)
                                        <div class="swiper-slide">
                                            <div class="shop-item">
                                                <div class="shop-thumb">
                                                    <img src="{{ $image }}" alt="{{ $product->title}}">
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="post-content">
                                <h3>
                                    {!! $product->title !!}
                                </h3>
                                <p class="rating" style="color: orange">
                                    {!! str_repeat('★',floor($product->rating)) !!}
                                    ({!! $product->review_count !!} review)
                                </p>
                                <h4>
                                    {!! $product->price !!}
                                </h4>
                                <h5>
                                    Product Description
                                </h5>
                                <p>
                                    {!! $product->introduction!!}
                                </p>
                                <form>
                                    <div class="select-product size" style="background-color: rgb(255,247,241)">
                                        @foreach($product->skus as $sku)
                                        <label
                                            class="btn sku-btn"
                                            data-price="{{ $sku->price }}"
                                            data-stock="{{ $sku->stock }}"
                                            data-toggle="tooltip"
                                            title="{{ $sku->description }}"
                                            data-placement="bottom"
                                            style="float:left; font-size: 14px;margin-right: 10px;border: 1px solid gray; ">
                                          <input type="radio" name="skus" autocomplete="off" value="{{ $sku->id }}"> {!! $sku->title !!}
                                        </label>
                                      @endforeach
                                    </div>
                                    <div class="select-product color" style="opacity: 0">
                                    </div>
                                    <div class="cart-plus-minus">
                                        <div class="dec qtybutton">-</div>
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                        <div class="inc qtybutton">+</div>
                                    </div>
                                    <button type="submit">Add To Cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="review">
                    <ul class="agri-ul review-nav">
                        <li class="desc" data-target="description-show">Description</li>
                        <li class="rev active" data-target="review-content-show">Reviews {!! $product->review_count !!}</li>
                    </ul>
                    <div class="review-content review-content-show">
                        <div class="review-showing">
                            <ul class="agri-ul content">
                                @foreach($reviews as $review)
                                <li>
                                    <div class="post-content">
                                        <div class="entry-meta">
                                            <div class="posted-on">
                                                <a >{{ $review->order->user->name }}</a>
                                                <p>Posted on {!! $review->reviewed_at->format('Y-m-d H:i') !!}</p>
                                            </div>
                                            <div class="rating" style="color:orange">
                                                {{ str_repeat('★', floor($review->rating)) }}
                                            </div>
                                        </div>
                                        <div class="entry-content">
                                            <p>{!! $review->review !!}</p>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="description">
                            <p>{!! $product->description !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop Page Section ending here -->

@endsection

{{-- @section('scriptsAfterJs')
<script>
  $(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip({trigger: 'hover'});
    $('.sku-btn').click(function () {
      $('.new-price').text($(this).data('price'));
    });

    // 加入购物车按钮点击事件
    $('.btn-add-to-cart').click(function () {

      // 请求加入购物车接口
      axios.post('{{ route('cart.add') }}', {
        sku_id: $('label.active input[name=skus]').val(),
        amount: $('.cart_amount input').val(),
      })
      .then(function () {
      swal('加入购物车成功', '', 'success')
        .then(function() {
          location.href = '{{ route('cart.index') }}';
        });
        }, function (error) { // 请求失败执行此回调
          if (error.response.status === 401) {

          // http 状态码为 401 代表用户未登陆
          swal('请先登录', '', 'error');

        } else if (error.response.status === 422) {

          // http 状态码为 422 代表用户输入校验失败
          var html = '<div>';
          _.each(error.response.data.errors, function (errors) {
            _.each(errors, function (error) {
              html += error+'<br>';
            })
          });
          html += '</div>';
          swal({content: $(html)[0], icon: 'error'})
        } else {

          // 其他情况应该是系统挂了
          swal('系统错误', '', 'error');
        }
      })
    });
  });
</script>
@endsection --}}
