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

Route::get('/', 'VisitorController@index');
Route::get('/eng', 'VisitorController@eng');

Route::post('/mail', 'VisitorController@mail');

// Route::get('/test', 'VisitorController@test');

// NORMAL 
Route::get('login', 'VisitorController@login');
Route::get('logout', 'VisitorController@logout');
Route::post('login', 'VisitorController@signin');
// FACEBOOK LOGIN
Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('app', 'Auth\LoginController@indexLogin');

// blog admin
Route::get('/app/blog', 'Auth\BlogController@index');
Route::get('/app/blog/create', 'Auth\BlogController@create');
Route::post('/app/blog/create', 'Auth\BlogController@store');
Route::get('/app/blog/update/{id}', 'Auth\BlogController@edit');
Route::post('/app/blog/update/{id}', 'Auth\BlogController@update');
Route::get('/app/blog/update/{id}/uploadPhotos', 'Auth\BlogController@uploadPhotoView');
Route::post('/app/blog/update/{id}/uploadPhotos', 'Auth\BlogController@uploadPhoto');
Route::get('/app/blog/destroy', 'Auth\BlogController@destroy');

// USUARIOS
Route::get('/app/users', 'Auth\UsersController@list');
Route::get('/app/users/create', 'Auth\UsersController@create');
Route::post('/app/users/create', 'Auth\UsersController@store');
Route::get('/app/users/update/{id}', 'Auth\UsersController@edit');
Route::post('/app/users/update/{id}', 'Auth\UsersController@update');
Route::get('/app/users/destroy', 'Auth\UsersController@destroy');

