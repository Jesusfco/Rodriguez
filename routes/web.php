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

//BLOG ADMIN
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

//WORKS
Route::get('/app/works', 'Auth\WorksController@list');
Route::get('/app/works/create', 'Auth\WorksController@create');
Route::post('/app/works/create', 'Auth\WorksController@store');
Route::get('/app/works/update/{id}', 'Auth\WorksController@edit');
Route::post('/app/works/update/{id}', 'Auth\WorksController@update');
Route::get('/app/works/destroy/{id}', 'Auth\WorksController@destroy');

//SERVICES
Route::get('/app/services', 'Auth\ServicesController@list');
Route::get('/app/services/create', 'Auth\ServicesController@create');
Route::post('/app/services/create', 'Auth\ServicesController@store');
Route::get('/app/services/update/{id}', 'Auth\ServicesController@edit');
Route::post('/app/services/update/{id}', 'Auth\ServicesController@update');
Route::get('/app/services/destroy/{id}', 'Auth\ServicesController@destroy');
