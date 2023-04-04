<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\ResponsavelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdministratorController;



//---------------------------------Aluno---------------------------------//

Route::get('/aluno', [AlunoController::class, 'index'])->name('aluno.index'); 

//---------------------------------Usurário---------------------------------//

Route::get('/user', [UserController::class, 'index'])->name('user.index');

//---------------------------------Responsável---------------------------------//

//---------------------------------Admin---------------------------------//
Route::get('/administrador', [AdministradorController::class, 'index'])->name('administrador.index');


Route::get('/responsavel', [ResponsavelController::class, 'index'])->name('responsavel.index');

//---------------------------------Amdmin LTE---------------------------------//

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

