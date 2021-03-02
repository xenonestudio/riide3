<?php

use Illuminate\Http\Request;
//header('Access-Control-Allow-Origin: *');  
//header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
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


Route::group(['middleware' => ['cors']], function () {
    //Rutas a las que se permitirá acceso
    Route::get("/categorias","Api\ApiController@categorias");
Route::get("/categorias/{id}","Api\ApiController@tiendasPorCategoria");
Route::get("/lo_mas_hot","Api\ApiController@loMasHot");
Route::get("/tienda/{id}","Api\ApiController@tienda");
Route::get("/producto/{id}","Api\ApiController@producto");
Route::get("/getProducts","Api\ApiController@getProducts");
Route::get("/promociones","Api\ApiController@promociones");
Route::get("/search/{search}","Api\ApiController@search");
});
