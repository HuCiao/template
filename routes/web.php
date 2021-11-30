<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes(['verify' => true]);

// auth 中间件代表需要登录，verified中间件代表需要经过邮箱验证
Route::group(['middleware' => ['auth', 'verified']], function() {

    //cart路由
    Route::get('/user/cart.html', 'UserController@cart')->name('user.cart');
    //购物车移除路由
    Route::delete('/user/cart/{sku}.html', 'CartController@remove')->name('user.cart.remove');
});

//主页路由
Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/home.html', 'HomeController@index')->name('home.index');

//about路由
Route::get('/about.html', 'HomeController@about')->name('home.about');
//team路由
Route::get('/team.html', 'HomeController@team')->name('home.team');
//faq路由
Route::get('/faq.html', 'HomeController@faq')->name('home.faq');
//blog路由
Route::get('/blogs.html', 'HomeController@blog')->name('home.blog');
//blog详情页面
Route::get('/blogs/{blog}.html', 'HomeController@detail')->name('blog.detail');
//blog添加评论
Route::any('/blogs/add.html', 'HomeController@addComment')->name('comments.add');
//gallery路由
Route::get('/gallery.html', 'HomeController@gallery')->name('home.gallery');
//contact路由
Route::get('/contact.html', 'HomeController@contact')->name('home.contact');

//商品列表页面
Route::get('/products.html', 'ProductsController@index')->name('products.index');
//商品详情页面
Route::get('/products/{product}.html', 'ProductsController@show')->name('products.show');
