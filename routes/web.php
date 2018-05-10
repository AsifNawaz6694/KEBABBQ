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


/*Admin Routes Started*/
Route::group(['prefix' => 'admin' ,  'middleware' => 'is-admin'], function () {

	Route::get('/', 'Admin\AdminController@index')->name('admin_index');
	Route::get('admin_logout', 'Admin\AdminController@admin_logout')->name('admin_logout');

//Users CRUD Routes Started
	Route::get('users', 'Admin\AdminController@users')->name('users');
	Route::get('user/create', 'Admin\AdminController@create')->name('create_user');
	Route::post('user/store', 'Admin\AdminController@store')->name('store_user');
	Route::get('user/{id}/edit', 'Admin\AdminController@user_edit')->name('user_edit');
	Route::post('update_user/{id}',['as'=>'update_user','uses'=>'Admin\AdminController@update']);
	Route::post('user/password_update/{id}', 'Admin\AdminController@update_password')->name('update_password');
	Route::get('user/delete/{id}', 'Admin\AdminController@destroy')->name('delete_user');
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

	//ADMIN QUESTIONS
	Route::get('adminquestion_index','Admin\Admin_questionController@index')->name('adminquestion_index');
	Route::get('/admin_question_form','Admin\Admin_questionController@new')->name('create_admin_question');
	Route::post('/create_admin_questions','Admin\Admin_questionController@create')->name('create_question_for_admin');
	Route::get('/admin_edit_question/{id}','Admin\Admin_questionController@question_edit')->name('admin_edit_question');
	Route::post('/admin_question_update/{id}','Admin\Admin_questionController@question_update')->name('update_question_for_admin');
	Route::get('/admin_question_delete/{id}','Admin\Admin_questionController@question_destroy')->name('admin_question_destroy');
});

/*Admin Routes Ended*/


/*Front Routes Ended*/

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'Front\FrontController@dashboard')->name('dashboard');

//Route::get('/admin', 'Admin\AdminController@login')->name('admin_login');
/*Front Routes Ended*/
