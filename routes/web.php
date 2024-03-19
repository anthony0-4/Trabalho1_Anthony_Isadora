<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\LivrosController;
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
Route::resource('categoria', CategoriaController::class);
Route::post('/categoria/search', [CategoriaController::class, "search"])->name('categoria.search');

Route::resource('livros', LivrosController::class);
Route::post('/livros/search', [LivrosController::class, "search"])->name('livros.search');
