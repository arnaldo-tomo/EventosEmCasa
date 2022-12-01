<?php

use App\Http\Controllers\EventosController;
use App\Models\Eventos;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $eventos = Eventos::all();
    return view('welcome', compact('eventos'));
})->name('home');


Route::group(['middleware' => ['web']], function () {

    Route::get('/perfil', [EventosController::class, 'perfil'])->middleware()->name('perfil');
});
Route::get('/Todos', [EventosController::class, 'todos'])->name('todos');
Route::get('/Detalhes', [EventosController::class, 'detalhes'])->name('detalhes');
Route::get('/Categoria', [EventosController::class, 'categoria'])->name('categoria');
Route::get('/Terminar', [EventosController::class, 'sair'])->name('sair');
Route::post('/Salvar', [EventosController::class, 'salvar'])->name('salvar');

require __DIR__ . '/auth.php';
