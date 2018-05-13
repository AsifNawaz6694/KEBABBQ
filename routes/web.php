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


//Common/General Routes Started

/*Front Routes Ended*/

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'Front\FrontController@dashboard')->name('dashboard');
Route::get('/login', 'AuthenticationController@login_index')->name('login_index');
Route::post('/login_post', 'AuthenticationController@login_post')->name('login_post');
Route::post('contact_form',['as'=>'contact_form','uses'=>'Front\FrontController@contact_form']);

// Cart Routes Started
Route::get('/cart','Front\CartController@cart')->name('cart');
// Cart Routes Ended

/*Front Routes Ended*/



/*Admin Routes Started*/

Route::group(['prefix' => 'admin' ,  'middleware' => 'is-admin'], function () {

	Route::get('/', 'Admin\AdminController@index')->name('admin_index');
	Route::get('admin_logout', 'Admin\AdminController@admin_logout')->name('admin_logout');
	
//Products CRUD Routes Started
	Route::get('/product','Admin\ProductsController@index')->name('products');
	Route::post('product/store', 'Admin\ProductsController@store')->name('store_product');
	Route::get('product/create', 'Admin\ProductsController@create')->name('create_product');
	Route::get('product/delete/{id}', 'Admin\ProductsController@destroy')->name('delete_product');
	Route::get('product/{id}', 'Admin\ProductsController@product_view')->name('product_view');
	Route::get('product/{id}/edit', 'Admin\ProductsController@edit')->name('product_edit');
	Route::post('update_product/{id}',['as'=>'update_product','uses'=>'Admin\ProductsController@update']);
		Route::post('ImageUploadProduct',['as'=>'ImageUploadProduct','uses'=>'Admin\ProductsController@ImageUploadProduct']);
//Products CRUD Routes Ended

//Categories CRUD Routes Started
	Route::get('/category','Admin\CategoryController@index')->name('categories');
	Route::post('category/store', 'Admin\CategoryController@store')->name('store_category');
	Route::get('category/create', 'Admin\CategoryController@create')->name('create_category');
	Route::get('category/delete/{id}', 'Admin\CategoryController@destroy')->name('delete_category');
	Route::get('category/{id}', 'Admin\CategoryController@category_view')->name('category_view');
	Route::get('category/{id}/edit', 'Admin\CategoryController@edit')->name('category_edit');
	Route::post('update_category/{id}',['as'=>'update_category','uses'=>'Admin\CategoryController@update']);
		Route::post('ImageUploadProduct',['as'=>'ImageUploadProduct','uses'=>'Admin\CategoryController@ImageUploadProduct']);
//Categories CRUD Routes Ended


//Users CRUD Routes Started
	Route::get('users', 'Admin\AdminController@users')->name('users');
	// Route::post('user/store', 'Admin\AdminController@store')->name('store_user');
	// Route::get('user/create', 'Admin\AdminController@create')->name('create_user');
	Route::get('user/{id}/edit', 'Admin\AdminController@user_edit')->name('user_edit');
	Route::post('update_user/{id}',['as'=>'update_user','uses'=>'Admin\AdminController@update']);
	Route::post('user/password_update/{id}', 'Admin\AdminController@update_password')->name('update_password');	
	Route::get('user/{id}', 'Admin\AdminController@user_view')->name('user');
//Users CRUD Routes Ended

	//Admin activate/deactivate Users
	Route::get('/activate_user/{id}/', ["as" => "activate-user","uses" => "Admin\AdminController@activate_user"]);
	Route::get('/deactivate_user/{id}/', ["as" => "deactivate-user", "uses" => "Admin\AdminController@deactivate_user"]);
	//Admin activate/deactivate Users

	//Admin Uploading ProfilePicture
	Route::post('ImageUpload',['as'=>'ImageUpload','uses'=>'Admin\AdminController@ImageUpload']);
	//Admin Uploading ProfilePicture

	//Admin Removing ProfilePicture
	Route::get('/remove_picture_admin/{user_id}','Admin\AdminController@remove_picture_admin')->name('remove_picture_admin');
	//Admin Removing ProfilePicture	
});

/*Admin Routes Ended*/



