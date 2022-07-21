<?php

use App\Http\Controllers\Frontend\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/documentation/api', [PagesController::class, 'api'])->name('api.home');
