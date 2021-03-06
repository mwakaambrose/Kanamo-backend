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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1/facebook'], function () {
    Route::get('bot', 'FacebookController@index');
    Route::get('bot/events', 'FacebookController@events');
    Route::post('bot/subscribe', 'FacebookController@subscribe');
    Route::post('bot/reserve', 'FacebookController@reserve');
    Route::get('bot/more', 'FacebookController@moreinfo');
    //http://kanamo.herokuapp.com/api/v1/facebook/bot/latest
    Route::get('bot/latest', 'FacebookController@latest');
});