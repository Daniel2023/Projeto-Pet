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
Route::get('/pet/novo', 'PetsController@create');
Route::post('/pet/edit/{id}', 'PetsController@update')->name('atualizar_pet');
Route::get('/pets/ver', 'PetsController@show');
Route::get('/pet/{id}', 'PetsController@edit')->name('editar_pet');


