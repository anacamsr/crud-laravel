<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/lista', 'App\Http\Controllers\BookController@index')->name('lista.index');
// Route::get('/lista/{id}', 'App\Http\Controllers\BookController@show')->name('lista.show');
// Route::get('/cadastro', 'App\Http\Controllers\BookController@create')->name('lista.create');
// Route::post('/lista/creater', 'App\Http\Controllers\BookController@store')->name('lista.store');
// Route::get('/lista/editar/{id}', 'App\Http\Controllers\BookController@edit')->name('lista.edit');
// Route::put('/lista/atualizar/{id}', 'App\Http\Controllers\BookController@update')->name('lista.update');

// Route::get('/books', [BookController::class, 'index'])->name('books.index');

// Route::get('/books/{id}', [BookController::class, 'show'])->name('lista.show');

// Route::match(['get', 'post'], '/create', [BookController::class, 'create'])->name('books.create');

// Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');

// Route::post('/books', [BookController::class, 'store'])->name('books.store');

// Route::resource('books', BookController::class);

// Listagem de Livros
Route::get('/books', [BookController::class, 'index'])->name('books.index');

// Detalhes de um Livro
Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');

// Criar um Novo Livro (Formulário)
Route::get('/book/create', [BookController::class, 'create'])->name('books.create');

// Armazenar um Novo Livro (Processar Formulário)
Route::post('/book/store', [BookController::class, 'store'])->name('books.store');

// Editar um Livro (Formulário)
Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');

// Atualizar um Livro (Processar Formulário)
Route::post('/books/{id}', [BookController::class, 'update'])->name('books.update');

// Excluir um Livro
Route::post('/books/{id}/delete', [BookController::class, 'destroy'])->name('books.destroy');
