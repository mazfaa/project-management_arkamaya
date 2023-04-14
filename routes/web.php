<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProjectController;

Route::middleware('auth')->group(function () {
  Route::resource('/', ProjectController::class);
  Route::put('/{project}', [ProjectController::class, 'update'])->name('update');
  Route::delete('/', [ProjectController::class, 'destroy'])->name('destroy');
  Route::post('/logout', LogoutController::class)->name('logout');
});

Route::middleware('guest')->group(function () {
  Route::get('/login', function () { return view('login'); })->name('login');
  Route::post('/login', [AuthController::class, 'login']);
});