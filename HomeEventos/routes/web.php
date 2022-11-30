<?php

use App\Http\Controllers\EventosController;
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
})->name('home');
Route::get('/Todos', [EventosController::class, 'todos'])->name('todos');
Route::get('/Detalhes', [EventosController::class, 'detalhes'])->name('detalhes');
Route::get('/Categoria', [EventosController::class, 'categoria'])->name('categoria');
Route::get('/sair', [EventosController::class, 'sair'])->name('sair');
Route::post('/salvar', [EventosController::class], 'salvar')->name('salvar');




require __DIR__ . '/auth.php';
