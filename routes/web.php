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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    Route::get('/destacado',"Voyager\DestacadosController@index");

    Route::get('/destacar/{state}/{id}',"Voyager\DestacadosController@destacar");

    Route::get('/lomashot/{data}',"Voyager\DestacadosController@lomashot");

});

Auth::routes();

Route::get('/', 'CategoriasController@categorias');
Route::get('/categorias/{id}', 'CategoriasController@subcategorias');
Route::get('/tienda/{id}', 'CategoriasController@tienda');
Route::get('/producto/{id}', 'CategoriasController@producto');
Route::get('/lo_mas_hot', 'CategoriasController@loMasHot');
Route::get('/promociones', 'CategoriasController@promociones');


