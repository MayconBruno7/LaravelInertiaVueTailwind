<?php

use App\Http\Controllers\StudiesController;
use Illuminate\Support\Facades\Route;

Route::get('/exampleRef', [StudiesController::class, 'exampleRef'])->name('exampleRef');
Route::get('/exampleWatch', [StudiesController::class, 'exampleWatch'])->name('exampleWatch');
