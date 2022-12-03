<?php

use App\Http\Controllers\EventosController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EventosController::class, 'home'])->name('home');
Route::get('/Perfil', [EventosController::class, 'perfil'])->middleware(['auth'])->name('perfil');
Route::get('/Sobre', [EventosController::class, 'sobre'])->middleware(['auth'])->name('sobre');
Route::get('/Todos', [EventosController::class, 'todos'])->name('todos');
Route::get('/Categoria', [EventosController::class, 'categoria'])->name('categoria');
Route::get('/Terminar', [EventosController::class, 'sair'])->name('sair');
Route::post('/Salvar', [EventosController::class, 'salvar'])->name('salvar');

require __DIR__ . '/auth.php';
