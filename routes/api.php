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

//Method GET
Route::Get('/mobil', 'CarController@showAll');
Route::Get('/mobil/{brand}', 'CarController@showOne');
Route::Get('/mobil/{brand}/{type}', 'CarController@showOne');

//Method POST
Route::Post('/mobil', 'CarController@create');

//Method PUT
Route::Put('/mobil/{nmrKerangka}', 'CarController@update');

//Method DELETE
Route::Delete('/mobil/{nmrKerangka}', 'CarController@destroy');