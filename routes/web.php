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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','App\Http\Controllers\Controlador@inicio')-> name("inicio");

Route::get('registro','App\Http\Controllers\Controlador@registro')-> name("registro");

Route::post('registro','App\Http\Controllers\Controlador@nuevoUsuario')-> name("registro.nuevoUsuario");




Route::get('registro/{id}','App\Http\Controllers\Controlador@informacionUsuarios')->name('informacionUsuarios');

Route::get('registro/editarUsuarios/{id}','App\Http\Controllers\Controlador@editarUsuarios')->name('editarUsuarios');

Route::put('registro/editarUsuarios/{id}','App\Http\Controllers\Controlador@actualizarUsuario')->name('registro.actualizarUsuario');



Route::delete('registro/eliminar/{id}','App\Http\Controllers\Controlador@eliminarUsuario')->name('eliminarUsuario');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
