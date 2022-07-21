<?php

use App\Http\Controllers\Api\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1/')->group(function () {
    Route::get('today', [ApiController::class, 'today'])->name('today');
    Route::get('convert/bstoad', [ApiController::class, 'convertBsToAd'])->name('convertBsToAd');
    Route::get('convert/adtobs', [ApiController::class, 'convertAdToBs'])->name('convertAdToBs');
});
