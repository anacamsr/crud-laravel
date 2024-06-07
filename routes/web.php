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
    return redirect()->route('books.index');
});

// Listagem de Livros
Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/search', [BookController::class, 'index'])->name('books.search');

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
Route::get('/books/{id}/delete', [BookController::class, 'destroy'])->name('books.destroy');
