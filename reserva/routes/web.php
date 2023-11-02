<?php

use App\Http\Controllers\LaboratorioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


//Route::get('/', function () {
  //  return view('login.form');
//});


Route::view('/login', 'login.form')->name('login.form');
Route::post('/auth', [LoginController::class, 'auth'])->name('login.auth');
Route::get('/home', [SiteController::class, 'index'])->name('site.home');

//Route::post('/reservas', [LaboratorioController::class, 'index'])->name('laboratorio.index');
//Route::match(['get', 'post'], '/reservas', [LaboratorioController::class, 'index'])->name('laboratorio.index');

Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('users.index');
    Route::post('/', [UserController::class, 'store'])->name('users.store');
    Route::get('/create', [UserController::class, 'create'])->name('users.create');
    Route::get('/{user}', [UserController::class, 'show'])->name('users.show');
    Route::get('/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/{user}/update', [UserController::class, 'update'])->name('users.update');
    Route::delete('/{user}/destroy', [UserController::class, 'destroy'])->name('users.destroy');
});

Route::prefix('laboratorios')->group(function(){
  Route::get('/', [LaboratorioController::class, 'index'])->name('laboratorio.index');
  Route::post('/', [LaboratorioController::class, 'store'])->name('laboratorios.store');
  Route::get('/create', [LaboratorioController::class, 'create'])->name('laboratorios.create');
  Route::get('/{laboratorio}', [LaboratorioController::class, 'show'])->name('laboratorio.show');
  Route::get('/{laboratorio}/edit', [LaboratorioController::class, 'edit'])->name('laboratorios.edit');
  Route::put('/{laboratorio}/update', [LaboratorioController::class, 'update'])->name('laboratorios.update');
  Route::delete('/{laboratorio}/destroy', [LaboratorioController::class, 'destroy'])->name('laboratorios.destroy');
});

Route::prefix('reservas')->group(function(){
    Route::get('/', [ReservaController::class, 'index'])->name('reservas.index');
    Route::post('/', [ReservaController::class, 'store'])->name('reservas.store');
    Route::get('/create', [ReservaController::class, 'create'])->name('reservas.create');
});

