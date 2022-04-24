<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductosController;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/productos', 'HomeController@indexprod')->name('productos');
Route::get('/productos', [ProductosController::class, 'index'])->name('productos');
Route::get('/create', [ProductosController::class, 'create'])->name('create');
Route::post('/create', [ProductosController::class, 'store'])->name('store');
Route::get('/productos/editar/{id}', [ProductosController::class, 'edit']);
Route::put('/productos/{id}',  [ProductosController::class, 'update']);
Route::delete('/productos/{id}', [ProductosController::class, 'destroy']);

//Route::get('/productos', [App\Http\Controllers\ProductosController::class, 'index'])->name('productos');
//Route::resource('productos', ProductosController::class);