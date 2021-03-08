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

Route::get('/lenguaje', 'CategoriasController@lenguaje');
Route::get('/bienvenido', 'CategoriasController@bienvenido');

Route::get('/seleccione-tipo-usuario', function(){
    //return Route::is("seleccione-tipo-usuario") . "---";
    return view("seleccione-tipo-usuario");
})->name("seleccione-tipo-usuario");

Route::get('/log', function(){
    return view("login");
});

Route::get('/categorias', 'CategoriasController@categorias');
Route::get('/categorias/{id}', 'CategoriasController@subcategorias');
Route::get('/tienda/{id}', 'CategoriasController@tienda');
Route::get('/tienda/{id}/search/{search}', 'CategoriasController@searchTienda');
Route::get('/producto/{id}', 'CategoriasController@producto');
Route::get('/', 'CategoriasController@loMasHot')->name("lomashot");
Route::get('/promociones', 'CategoriasController@promociones');
Route::get('/search/{search}', 'CategoriasController@search');


