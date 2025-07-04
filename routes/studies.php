<?php

use App\Http\Controllers\StudiesController;
use Illuminate\Support\Facades\Route;

Route::get('/exampleRef', [StudiesController::class, 'exampleRef'])->name('exampleRef');
Route::get('/exampleWatch', [StudiesController::class, 'exampleWatch'])->name('exampleWatch');
Route::get('/exampleComputed', [StudiesController::class, 'exampleComputed'])->name('exampleComputed');
Route::get('/exampleProps', [StudiesController::class, 'exampleProps'])->name('exampleProps');
Route::get('/exampleVModel', [StudiesController::class, 'exampleVModel'])->name('exampleVModel');
Route::get('/exampleVFor', [StudiesController::class, 'exampleVFor'])->name('exampleVFor');
Route::get('/exampleVIf', [StudiesController::class, 'exampleVIf'])->name('exampleVIf');
Route::get('/exampleEmit', [StudiesController::class, 'exampleEmit'])->name('exampleEmit');
