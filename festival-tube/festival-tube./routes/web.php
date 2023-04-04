<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AutenticacaoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/login', [AutenticacaoController::class, 'index'])
->name("login.form");
Route::post('/login', [AutenticacaoController::class, 'login'])
->name("login.validation");

Route::resource('/usuarios', UsuarioController::class);
