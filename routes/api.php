<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('amerigas', 'VisitorController@amerigasContact');

Route::post('login', 'PhotoApp\ClientController@login');
Route::get('checkAuth', 'PhotoApp\ClientController@checkAuth');
Route::get('albums', 'PhotoApp\ClientController@getAlbums');
Route::get('album/{id}', 'PhotoApp\ClientController@getPhotos');
Route::post('album/storeSelection', 'PhotoApp\ClientController@storeSelection');
