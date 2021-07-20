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
    return redirect('/login');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/livro/novo','LivrosController@create');
Route::middleware(['auth:sanctum', 'verified'])->post('/livro/novo','LivrosController@store')->name('salvar_livro');
Route::middleware(['auth:sanctum', 'verified'])->get('/livro/ver', 'LivrosController@show');
Route::middleware(['auth:sanctum', 'verified'])->get('/livro/editar/{id}', 'LivrosController@edit');
Route::middleware(['auth:sanctum', 'verified'])->post('/livro/editar/','LivrosController@update')->name('editar_livro');
Route::middleware(['auth:sanctum', 'verified'])->get('/livro/excluir/{id}','LivrosController@destroy')->name('excluir_livro');

Route::middleware(['auth:sanctum', 'verified'])->get('/conta/novo','ContaController@create');
Route::middleware(['auth:sanctum', 'verified'])->post('/conta/novo','ContaController@store')->name('cadastrar_conta');
Route::middleware(['auth:sanctum', 'verified'])->get('/conta/ver', 'ContaController@show');
Route::middleware(['auth:sanctum', 'verified'])->get('/conta/editar/{id}', 'ContaController@edit');
Route::middleware(['auth:sanctum', 'verified'])->post('/conta/editar/','ContaController@update')->name('editar_conta');
Route::middleware(['auth:sanctum', 'verified'])->get('/conta/excluir/{id}','ContaController@destroy')->name('excluir_conta');






Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
