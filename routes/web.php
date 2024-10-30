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
    return view('welcome');
})->name('inicio');


Route::get('/tarea/inicio', 'App\Http\Controllers\TareaController@index')->name('listatareas');
Route::get('/tarea/nueva', 'App\Http\Controllers\TareaController@Tareanueva')->name('tareanueva');
Route::post('/tarea/registronueva', 'App\Http\Controllers\TareaController@Registrotareanueva')->name('registronuevatarea');

#Route::post('ejemplo', [BucketsController::class, 'SubirObjeto']);

// 


