<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventosController;
use App\Http\Controllers\Usuario as ControllersUsuario;
use App\Models\Usuario;

Route::get('/', [EventosController::class, 'home'])->name('home');
Route::post('/PasswordUpdate', [ControllersUsuario::class, 'PasswordUpdate'])->name('PasswordUpdate');
Route::post('/infoUpdate', [ControllersUsuario::class, 'infoUpdate'])->name('infoUpdate');
Route::post('/profileUpdate', [ControllersUsuario::class, 'profileUpdate'])->name('profileUpdate');
Route::get('/autocomplete', [EventosController::class, 'autocomplete'])->middleware(['auth'])->name('autocomplete');
Route::get('/Perfil', [EventosController::class, 'perfil'])->middleware(['auth'])->name('perfil');
Route::get('/Configuracoes', [EventosController::class, 'Configuracoes'])->middleware(['auth'])->name('Configuracoes');
Route::get('/Verperfil{id}', [EventosController::class, 'Verperfil'])->middleware(['auth'])->name('Verperfil');
Route::get('/Sobre{id}', [EventosController::class, 'sobre'])->middleware(['auth'])->name('sobre');
Route::get('/Todos', [EventosController::class, 'todos'])->middleware(['auth'])->name('todos');
Route::get('/categoria', [EventosController::class, 'categoria'])->middleware(['auth'])->name('categoria');
Route::get('/Terminar', [EventosController::class, 'sair'])->name('sair');
Route::post('/Salvar', [EventosController::class, 'salvar'])->name('salvar');
Route::get('/gosto{id}', [EventosController::class, 'gosto'])->name('gosto');
Route::get('/Save', [AdminController::class, 'categoria'])->middleware(['auth'])->name('Save');
require __DIR__ . '/auth.php';
