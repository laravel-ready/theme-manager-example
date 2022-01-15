<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Web\LandingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('/')->group(function (){
    Route::get('', [LandingController::class, 'index'])->name('home');

    Route::get('my-page', [LandingController::class, 'anyPage'])->name('my-page');
});


