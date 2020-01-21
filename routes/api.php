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

Route::get('/items', 'ItemController@getItems');
Route::post('/items', 'ItemController@createItem');
Route::put('/items', 'ItemController@updateItem');
Route::delete('/items', 'ItemController@dropItem');
