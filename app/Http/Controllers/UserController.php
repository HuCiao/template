<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductSku;

class UserController extends Controller
{
    public function cart(Request $request)
    {
        $cartItems = $request->user()->cartItems()->with(['productSku.product'])->get();

        return view('user.cart', ['cartItems' => $cartItems]);
    }

    public function remove(ProductSku $sku, Request $request)
    {
        $request->user()->cartItems()->where('product_sku_id', $sku->id)->delete();

        return [];
    }
}
