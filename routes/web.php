<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

Route::get('/list', [SeriesController::class, 'index'])->name('index');
