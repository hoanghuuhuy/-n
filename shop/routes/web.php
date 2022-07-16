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
//frontend
Route::group(['namespace' => 'Frontend'], function() {
    //trang home
    Route::get('','HomeController@index')->name('get.home');
    //trang danh sách sản phẩm
    Route::get('danh-muc/{slug}','CategoryController@index')->name('get.category');
    //trang chi tiết sản phẩm
    Route::get('san-pham/{slug}','ProductDetailController@index')->name('get.product_detail');
    //trang chi tiết bài viết
    Route::get('bai-viet/{slug}','ArticleDetailController@index')->name('get.article_detail');
    //trang bài viết tổng hợp
    Route::get('bai-viet','ArticleController@index')->name('get.article');
    //điều khuyển tag
    Route::get('tag/{slug}','TagController@index')->name('get.tag');
    //trang menu
    Route::get('menu/{slug}','MenuController@index')->name('get.menu');
    //trang sản phẩm tổng hợp
    Route::get('san-pham','ProductController@index')->name('get.product');
});

include 'route_admin.php';


