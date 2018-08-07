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

<<<<<<< HEAD
//test//
Route::group(['namespace' => 'Api\V1', 'as' => 'api'], function () {

        Route::get('getproduct', 'ProductsController@getproduct');

});
//.end of test.//
=======


//test//
>>>>>>> 4019fc7b0a1b08b8b05b51e87b1b25be25277347
