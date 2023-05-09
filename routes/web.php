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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Auth::routes();

Route::get('/wishlist', [App\Http\Controllers\HomeController::class, 'wishlist'])->name('wishlist');

Route::group(['as' => 'front.', 'namespace' => 'Front'], function () {
    Route::post('products/delete', 'ProductController@delete')->name('products.delete');
    Route::resource('/products', 'ProductController');
    Route::get('/{category_group_slug}/{category_slug}', 'ProductController@index')->name('category.products');

    Route::resource('/cart', 'CartController');
    Route::resource('/checkout', 'CheckoutController');
});
