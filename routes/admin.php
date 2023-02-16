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
		
		Route::post('categories/delete', 'CategoryGroupController@delete')->name('categories.delete');
		Route::resource('/categories', 'CategoryController');
	});
});
