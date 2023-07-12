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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/wishlist', [App\Http\Controllers\HomeController::class, 'wishlist'])->name('wishlist');
Route::get('/wishlist/delete/{productId}', [App\Http\Controllers\HomeController::class, 'removeWishlistItem'])->name('removeWishlistItem');
Route::get('/add-to-cart/{productId}', [App\Http\Controllers\HomeController::class, 'addToCart'])->name('addToCart');
Route::group(['as' => 'front.', 'namespace' => 'Front'], function () {
    Route::post('products/delete', 'ProductController@delete')->name('products.delete');
    Route::resource('/products', 'ProductController');
    Route::get('/{category_group_slug}/{category_slug}', 'ProductController@index')->name('category.products');

    Route::resource('/cart', 'CartController');
    Route::resource('/checkout', 'CheckoutController');
    Route::resource('/orders', 'OrderController');
    
    //--- Content pages
    Route::get('about-us', 'CMSPageController@aboutUs')->name('aboutus');
    Route::get('terms', 'CMSPageController@terms')->name('terms');
    Route::get('policy', 'CMSPageController@policy')->name('policy');
    Route::get('faqs', 'CMSPageController@faq')->name('faq');
    Route::get('carrer', 'CMSPageController@carrer')->name('carrer');
    Route::get('delivery-policy', 'CMSPageController@deliveryPolicy')->name('delivery.policy');
});
