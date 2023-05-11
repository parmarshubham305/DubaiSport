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
Route::get('create', function(){
	\Artisan::call('migrate:refresh');
	App\Models\Admin::create([
		'name' => 'Admin',
		'email' => 'admin@admin.com',
		'password' => \Hash::make('123456')
	]);

	return "Done";
});

Route::group(['as' => 'admin.'], function () {

	Auth::routes();

	Route::get('logout', 'Auth\LoginController@logout')->name('logout');
	Route::get('locked', 'Auth\LoginController@locked')->name('locked');

	Route::group(['middleware' => ['admin', 'revalidate']], function () {
		Route::resource('/dashboard', 'DashboardController');

		Route::post('category-groups/delete', 'CategoryGroupController@delete')->name('category-groups.delete');
		Route::resource('/category-groups', 'CategoryGroupController');
		
		Route::post('categories/delete', 'CategoryController@delete')->name('categories.delete');
		Route::resource('/categories', 'CategoryController');

		Route::post('master-options/delete', 'MasterOptionController@delete')->name('master-options.delete');
		Route::resource('/master-options', 'MasterOptionController');

		Route::post('products/delete', 'ProductController@delete')->name('products.delete');
		Route::resource('/products', 'ProductController');

		Route::post('users/delete', 'UserController@delete')->name('users.delete');
		Route::resource('/users', 'UserController');
		
		Route::post('orders/delete', 'OrderController@delete')->name('orders.delete');
		Route::resource('/orders', 'OrderController');
	});
});
