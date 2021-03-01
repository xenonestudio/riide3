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

Route::get("/categorias","Api\ApiController@categorias");
Route::get("/categorias/{id}","Api\ApiController@tiendasPorCategoria");
Route::get("/lo_mas_hot","Api\ApiController@loMasHot");
Route::get("/tienda/{id}","Api\ApiController@tienda");
Route::get("/producto/{id}","Api\ApiController@producto");

Route::get("/getProducts","Api\ApiController@getProducts");