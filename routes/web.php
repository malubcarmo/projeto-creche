<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\ResponsavelController;


//---------------------------------Aluno---------------------------------//

Route::get('/aluno', [AlunoController::class, 'index'])->name('aluno.index'); 

//---------------------------------Admnistrador---------------------------------//



//---------------------------------Responsável---------------------------------//

Route::get('/responsavel', [ResponsavelController::class, 'index'])->name('responsavel.index');

//---------------------------------Amdmin LTE---------------------------------//

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
