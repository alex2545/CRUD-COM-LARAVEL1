<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastrosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'welcome');

Route::prefix('/cadastros')->namespace('App\Http\Controllers')->group(function(){

    Route::get('/', 'CadastrosController@list')->name('cadastros.list'); // Listagem de cadastros

    Route::get('add', 'CadastrosController@add')->name('cadastros.add'); // Tela adicionar create
    Route::post('add', 'CadastrosController@addAction'); // Ação adição store
    Route::get('edit/{id}', 'CadastrosController@edit')->name('cadastros.edit'); // Tela de edição
    Route::post('edit/{id}', 'CadastrosController@editAction'); // Ação edição
    Route::get('delete/{id}', 'CadastrosController@del')->name('cadastros.del'); // Ação deletar
    Route::get('marcar/{id}', 'CadastrosController@done')->name('cadastros.done'); // Marcar resolvido

});
