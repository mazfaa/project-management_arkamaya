<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

Route::resource('/', ProjectController::class);
Route::put('/{project}', [ProjectController::class, 'update'])->name('update');
Route::delete('/delete', [ProjectController::class, 'destroy'])->name('destroy');