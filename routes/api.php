<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('throttle:60,1')->group(function() {
    Route::get('/get/{db_id}/{db_accesskey}', 'ApiController@get')->name('api.get');
    Route::post('/post/{db_id}/{db_accesskey}', 'ApiController@post')->name('api.post');
});
