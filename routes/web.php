<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

Route::resource('/', ProjectController::class);