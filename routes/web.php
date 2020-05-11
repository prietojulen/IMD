<?php

use Illuminate\Support\Facades\Route;

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
    //return view('index');
    if(Auth::check())
        {
            return view('/index');
        }else{
            return view('auth/login');
    }
})->middleware('auth');

Route::get('/index', function () {
    return view('index');
})->middleware('auth');

//Asignaciones
Route::get('/asignaciones', 'AsignacionController@index')->name('asignacion.index')->middleware('auth');
Route::get('/asignaciones/create', 'AsignacionController@create')->name('asignacion.create')->middleware('auth');
Route::post('/asignaciones', 'AsignacionController@store')->name('asignacion.store')->middleware('auth');
Route::post('/asignaciones/{id}', 'AsignacionController@update')->name('asignacion.update')->middleware('auth');
Route::get('/asignaciones/{id}/edit', 'AsignacionController@edit')->name('asignacion.edit')->middleware('auth');
Route::get('/asignaciones/{id}', 'AsignacionController@show')->name('asignacion.show')->middleware('auth');
Route::get('/asignaciones/{id}/delete', 'AsignacionController@destroy')->name('asignacion.delete')->middleware('auth');


//Categoria
Route::get('/categorias', 'CategoriaController@index')->name('categoria.index')->middleware('auth');
Route::get('/categorias/create', 'CategoriaController@create')->name('categoria.create')->middleware('auth');
Route::post('/categorias', 'CategoriaController@store')->name('categoria.store')->middleware('auth');
Route::get('/categorias/{id}', 'CategoriaController@show')->name('categoria.show')->middleware('auth');
Route::post('/categorias/{id}', 'CategoriaController@update')->name('categoria.update')->middleware('auth');
Route::get('/categorias/{id}/edit', 'CategoriaController@edit')->name('categoria.edit')->middleware('auth');
Route::get('/categorias/{id}/delete', 'CategoriaController@destroy')->name('categoria.delete')->middleware('auth');

//Producto
Route::get('/productos', 'ProductoController@index')->name('producto.index')->middleware('auth');
Route::get('/productos/create', 'ProductoController@create')->name('producto.create')->middleware('auth');
Route::post('/productos', 'ProductoController@store')->name('productos.store')->middleware('auth');
Route::post('/productos/{id}', 'ProductoController@update')->name('productos.update')->middleware('auth');
Route::get('/productos/{id}/edit', 'ProductoController@edit')->name('productos.edit')->middleware('auth');
Route::get('/productos/{id}', 'ProductoController@show')->name('productos.show')->middleware('auth');
Route::get('/productos/{id}/delete', 'ProductoController@destroy')->name('productos.delete')->middleware('auth');


//Provincia
Route::get('/provincias', 'ProvinciaController@index')->name('provincia.index')->middleware('auth');
Route::get('/provincias/create', 'ProvinciaController@create')->name('provincia.create')->middleware('auth');
Route::post('/provincias', 'ProvinciaController@store')->name('provincia.store')->middleware('auth');
Route::post('/provincias/{id}', 'ProvinciaController@update')->name('provincia.update')->middleware('auth');
Route::get('/provincias/{id}/edit', 'ProvinciaController@edit')->name('provincia.edit')->middleware('auth');
Route::get('/provincias/{id}', 'ProvinciaController@show')->name('provincia.show')->middleware('auth');
Route::get('/provincias/{id}/delete', 'ProvinciaController@destroy')->name('provincia.delete')->middleware('auth');

//Poblaciones
Route::get('/poblaciones', 'PoblacionController@index')->name('poblacion.index')->middleware('auth');
Route::get('/poblaciones/create', 'PoblacionController@create')->name('poblacion.create')->middleware('auth');
Route::post('/poblaciones', 'PoblacionController@store')->name('poblacion.store')->middleware('auth');
Route::post('/poblaciones/{id}', 'PoblacionController@update')->name('poblacion.update')->middleware('auth');
Route::get('/poblaciones/{id}/edit', 'PoblacionController@edit')->name('poblacion.edit')->middleware('auth');
Route::get('/poblaciones/{id}', 'PoblacionController@show')->name('poblacion.show')->middleware('auth');
Route::get('/poblaciones/{id}/delete', 'PoblacionController@destroy')->name('poblacion.delete')->middleware('auth');

//Horarios
Route::get('/horarios', 'HorarioController@index')->name('horario.index')->middleware('auth');
Route::get('/horarios/create', 'HorarioController@create')->name('horario.create')->middleware('auth');
Route::post('/horarios', 'HorarioController@store')->name('horario.store')->middleware('auth');
Route::post('/horarios/{id}', 'HorarioController@update')->name('horario.update')->middleware('auth');
Route::get('/horarios/{id}/edit', 'HorarioController@edit')->name('horario.edit')->middleware('auth');
Route::get('/horarios/{id}', 'HorarioController@show')->name('horario.show')->middleware('auth');
Route::get('/horarios/{id}/delete', 'HorarioController@destroy')->name('horario.delete')->middleware('auth');

//Pedidos
Route::get('/pedidos', 'PedidoController@index')->name('pedido.index')->middleware('auth');

//Festivos
Route::get('/festivos', 'FestivoController@index')->name('festivo.index')->middleware('auth');
Route::get('/festivos/create', 'FestivoController@create')->name('festivo.create')->middleware('auth');
Route::post('/festivos', 'FestivoController@store')->name('festivo.store')->middleware('auth');
Route::post('/festivos/{id}', 'FestivoController@update')->name('festivo.update')->middleware('auth');
Route::get('/festivos/{id}/edit', 'FestivoController@edit')->name('festivo.edit')->middleware('auth');
Route::get('/festivos/{id}', 'FestivoController@show')->name('festivo.show')->middleware('auth');
Route::get('/festivos/{id}/delete', 'FestivoController@destroy')->name('festivo.delete')->middleware('auth');

//Imagenes
Route::get('/imagenes', 'ImagenController@index')->name('imagen.index')->middleware('auth');
Route::get('/imagenes/create', 'ImagenController@create')->name('imagen.create')->middleware('auth');
Route::post('/imagenes', 'ImagenController@store')->name('imagen.store')->middleware('auth');
Route::post('/imagenes/{id}', 'ImagenController@update')->name('imagen.update')->middleware('auth');
Route::get('/imagenes/{id}/edit', 'ImagenController@edit')->name('imagenq.edit')->middleware('auth');
Route::get('/imagenes/{id}', 'ImagenController@show')->name('imagen.show')->middleware('auth');
Route::get('/imagenes/{id}/delete', 'ImagenController@destroy')->name('imagen.delete')->middleware('auth');

//Llamame
Route::get('/llamame', 'LlamameController@index')->name('llamame.index')->middleware('auth');
Route::get('/llamame/create', 'LlamameController@create')->name('llamame.create')->middleware('auth');
Route::post('/llamame', 'LlamameController@store')->name('llamame.store')->middleware('auth');
Route::post('/llamame/{id}', 'LlamameController@update')->name('llamame.update')->middleware('auth');
Route::get('/llamame/{id}/edit', 'LlamameController@edit')->name('llamame.edit')->middleware('auth');
Route::get('/llamame/{id}', 'LlamameController@show')->name('llamame.show')->middleware('auth');
Route::get('/llamame/{id}/delete', 'LlamameController@destroy')->name('llamame.delete')->middleware('auth');

//Tanatorio
Route::get('/tanatorios', 'TanatorioController@index')->name('tanatorio.index')->middleware('auth');
Route::get('/tanatorios/create', 'TanatorioController@create')->name('tanatorio.create')->middleware('auth');
Route::post('/tanatorios', 'TanatorioController@store')->name('tanatorio.store')->middleware('auth');
Route::post('/tanatorios/{id}', 'TanatorioController@update')->name('tanatorio.update')->middleware('auth');
Route::get('/tanatorios/{id}/edit', 'TanatorioController@edit')->name('tanatorio.edit')->middleware('auth');
Route::get('/tanatorios/{id}', 'TanatorioController@show')->name('tanatorio.show')->middleware('auth');
Route::get('/tanatorios/{id}/delete', 'TanatorioController@destroy')->name('tanatorio.delete')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'auth\LoginController@logout')->middleware('auth');
