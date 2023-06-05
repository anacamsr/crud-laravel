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

Route::get('/books', [BookController::class, 'index'])->name('books.index');

// Route with parameters
Route::get('/books/{id}', [BookController::class, 'show'])->name('lista.show');

// Route with multiple HTTP verbs
Route::match(['get', 'post'], '/create', [BookController::class, 'create']);

Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');

// Route with a named route
Route::post('/books', [BookController::class, 'store'])->name('books.store');

// Route with a resource controller
Route::resource('books', BookController::class);