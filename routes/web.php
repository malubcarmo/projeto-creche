<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\ResponsavelController;
use App\Http\Controllers\UserController;


//---------------------------------Aluno---------------------------------//

Route::get('/aluno', [AlunoController::class, 'index'])->name('aluno.index'); 

//---------------------------------Usurário---------------------------------//

Route::get('/user', [UserController::class, 'index'])->name('user.index');

//---------------------------------Responsável---------------------------------//

Route::get('/responsavel', [ResponsavelController::class, 'index'])->name('responsavel.index');

//---------------------------------Amdmin LTE---------------------------------//

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
