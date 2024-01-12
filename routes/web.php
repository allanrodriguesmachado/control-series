<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

Route::get('/list', [SeriesController::class, 'index'])->name('index');
Route::get('/create', [SeriesController::class, 'create'])->name('create');
Route::post('/store', [SeriesController::class, 'store'])->name('store');
