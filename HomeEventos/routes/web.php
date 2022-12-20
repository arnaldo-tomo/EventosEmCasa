<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventosController;

Route::get('/', [EventosController::class, 'home'])->name('home');
Route::get('/Perfil', [EventosController::class, 'perfil'])->middleware(['auth'])->name('perfil');
Route::get('/Verperfil{user_name}', [EventosController::class, 'Verperfil'])->middleware(['auth'])->name('Verperfil');
Route::get('/Sobre', [EventosController::class, 'sobre'])->middleware(['auth'])->name('sobre');
Route::get('/Todos', [EventosController::class, 'todos'])->name('todos');
Route::get('/Categoria/{categoria}', [EventosController::class, 'categoria'])->name('categoria');
Route::get('/Terminar', [EventosController::class, 'sair'])->name('sair');
Route::post('/Salvar', [EventosController::class, 'salvar'])->name('salvar');
// Route::post('evebtos/join/{id}', [EventosController::class, 'participar'])->name('participar');
Route::post('join/{id}', [EventosController::class, 'join'])->name('join');
Route::get('/Save', [AdminController::class, 'categoria'])->name('Save');
require __DIR__ . '/auth.php';
