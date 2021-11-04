<?php

use App\Http\Controllers\PetsController;
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
});

Route::post('/pet/novo', 'PetsController@store')->name('salvar_pet');
Route::post('/', 'PetsController@store')->name('salvar_novo');
Route::get('/pet/novo', 'PetsController@create');
Route::get('/', 'PetsController@show');
Route::get('/pets/ver', 'PetsController@show');
Route::get('/pets/store/{id}', 'PetsController@edit')->name('editar_pet');
Route::post('/pets/edit/{id}', 'PetsController@update')->name('atualizar_pet');
Route::post('/pets/del/{id}','PetsController@destroy')->name('deletar_pet');

//Route::get('/pets/edit/{id}', [EventController::class, 'edit'])->middleware('auth');
//Route::put('/pets/update/{id}', [EventController::class, 'update'])->middleware('auth');


