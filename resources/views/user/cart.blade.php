@extends('layouts.layout')
@section('title','Cart')

@section('content')
<!-- Shop Cart Page Section start here -->
<div class="shop-cart padding-tb">
    <div class="container">
        <div class="section-wrapper mb-15">
            <div class="cart-top">
                <table>
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cartItems as $item)
                        <tr data-id="{{ $item->productSku->id }}">
                            <td class="product-item">
                                <div class="p-thumb">
                                    <a href="{{ route('products.show', [$item->productSku->product_id]) }}"><img src="{{ $item->productSku->product->image_url }}" alt="{{ $item->productSku->product->title }}"></a>
                                </div>
                                <div class="p-content">
                                    <h5>{{ $item->productSku->product->title }}</h5>
                                    {{ $item->productSku->title }}
                                </div>
                            </td>
                            <td>{{ $item->productSku->price }}</td>
                            <td>
                                <div class="cart-plus-minus">
                                    <div class="dec qtybutton">-</div>
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="{{ $item->amount }}">
                                    <div class="inc qtybutton">+</div>
                                </div>
                            </td>
                            <td>{{ $item->productSku->price * $item->amount }}</td>
                            <td>
                                <button class="btn-remove" style="background-color: rgb(255,247,241);border:0"><img src="{{URL::asset('images/del.png')}}" alt="product"></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="cart-bottom">
                <div class="cart-checkout-box">
                    <form action="" class="coupon">
                        <input type="text" name="coupon" placeholder="Coupon Code..." class="cart-page-input-text">
                        <input type="submit" value="Apply Coupon">
                    </form>
                    <form action="/" class="cart-checkout">
                        <input type=button onclick="location.reload();" value="Update Cart">
                        <input type="submit" value="Proceed to Checkout">
                    </form>
                </div>
                <div class="shiping-box">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="calculate-shiping w-100">
                                <h4>Calculate Shipping</h4>
                                <div class="outline-select">
                                    <select>
                                        <option value="volvo">United Kingdom (UK)</option>
                                        <option value="saab">Bangladesh</option>
                                        <option value="saab">Pakisthan</option>
                                        <option value="saab">India</option>
                                        <option value="saab">Nepal</option>
                                    </select>
                                    <span class="select-icon"><i class="icofont-caret-down"></i></span>
                                </div>
                                <div class="outline-select shipping-select">
                                    <select>
                                        <option value="volvo">State/Country</option>
                                        <option value="saab">Dhaka</option>
                                        <option value="saab">Benkok</option>
                                        <option value="saab">Kolkata</option>
                                        <option value="saab">Kapasia</option>
                                    </select>
                                    <span class="select-icon"><i class="icofont-caret-down"></i></span>
                                </div>
                                <input type="text" name="coupon" placeholder="Postcode/ZIP"
                                    class="cart-page-input-text" />
                                <button type="submit" class="lab-btn"><span>Update Total</span></button>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="cart-overview">
                                <h4>Cart Totals</h4>
                                <ul>
                                    <li>
                                        <span class="pull-left">Cart Subtotal</span>
                                        <p class="pull-right">$ 0.00</p>
                                    </li>
                                    <li>
                                        <span class="pull-left">Shipping and Handling</span>
                                        <p class="pull-right">Free Shipping</p>
                                    </li>
                                    <li>
                                        <span class="pull-left">Order Total</span>
                                        <p class="pull-right">$ 2940.00</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shop Cart Page Section ending here -->
@endsection

@section('scriptsAfterJs')
<script>
  $(document).ready(function () {
    // 监听 移除 按钮的点击事件
    $('.btn-remove').click(function () {
      // $(this) 可以获取到当前点击的 移除 按钮的 jQuery 对象
      // closest() 方法可以获取到匹配选择器的第一个祖先元素，在这里就是当前点击的 移除 按钮之上的 <tr> 标签
      // data('id') 方法可以获取到我们之前设置的 data-id 属性的值，也就是对应的 SKU id
      var id = $(this).closest('tr').data('id');
      swal({
        title: "确认要将该商品移除？",
        icon: "warning",
        buttons: ['取消', '确定'],
        dangerMode: true,
      })
      .then(function(willDelete) {
        // 用户点击 确定 按钮，willDelete 的值就会是 true，否则为 false
        if (!willDelete) {
          return;
        }
        axios.delete('/user/cart/' + id)
          .then(function () {
            location.reload();
          })
      });
    });

  });
</script>
@endsection
