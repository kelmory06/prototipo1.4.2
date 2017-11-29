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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/productos', function(){
	return view('productos');
});

Route::get('/quienes', function(){
	return view('quienes');
});


Route::resource('clientes', 'ClienteController');
Route::resource('encargados', 'EncargadoController');
Route::resource('proveedors', 'ProveedorController');
Route::resource('tipocompras', 'TipoCompraController');
Route::resource('compras', 'CompraController');
Route::resource('ventas', 'VentaController');
Route::resource('servicios','ServicioController');
Route::resource('citas', 'CitaController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
