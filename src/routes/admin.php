<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\IndexController;

Route::prefix('/admin')->name('admin.')->group(function (){
    Route::get('', [IndexController::class, 'index'])->name('home');

    Route::get('any-page', [IndexController::class, 'anyPage'])->name('any-page');
});
