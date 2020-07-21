<?php

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

Route::get('/', function () {
    return view('welcome');
});

//前台模块

Route::prefix('/index')->group(function (){
    Route::view('/index','Index.index'); //前台展示
    Route::view('/product_list','Index.product_list'); //商品展示
    Route::view('/shop_single','Index.shop_single');   //订单
    Route::view('/wishlist','Index.wishlist');  //我的收藏
    Route::view('/cart','Index.cart');  //购物车
    Route::view('/checkout','Index.checkout');  //支付
    Route::view('/blog','Index.blog');  //历史记录
    Route::view('/blog_single','Index.blog_single');
    Route::view('/error_404','Index.error_404');   //报错404
    Route::view('/testimonial','Index.testimonial');  //推荐用户
    Route::view('/about_us','Index.about_us');  //关于我们
    Route::view('/contact','Index.contact');    //联系人
    Route::view('/setting','Index.setting');    //设置
    Route::view('/login','Index.login');       //登录
    Route::view('/register','Index.register');   //注册
});



