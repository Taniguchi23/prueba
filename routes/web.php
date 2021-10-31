<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WintvController;

Route::get('/',[WintvController::class,'index'])->name('index');
Route::get('/nosotros',[WintvController::class,'we'])->name('we');
Route::get('/servicios',[WintvController::class,'services'])->name('services');
Route::get('/promociones',[WintvController::class,'promotions'])->name('promotions');
Route::get('/pagos',[WintvController::class,'pay'])->name('pay');
Route::get('/pagos/virtual',[WintvController::class,'payweb'])->name('pay.web');
Route::get('/pagos/pagoefectivo',[WintvController::class,'paypaycash'])->name('pay.paycash');
Route::get('/pagos/bbva',[WintvController::class,'paybbva'])->name('pay.bbva');
Route::get('/pagos/bcp',[WintvController::class,'paybcp'])->name('pay.bcp');
Route::get('/reglas',[WintvController::class,'rules'])->name('rules');
Route::get('/sanciones',[WintvController::class,'sanctions'])->name('sanctions');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
