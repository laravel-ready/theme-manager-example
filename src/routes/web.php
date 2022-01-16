<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Web\LandingController;

Route::prefix('/')->name('web.')->group(function (){
    Route::get('', [LandingController::class, 'index'])->name('home');

    Route::get('any-page', [LandingController::class, 'anyPage'])->name('any-page');
});
