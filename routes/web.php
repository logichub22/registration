<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('log.visit')->group(function() {
    Route::get('/', [PageController::class, 'comingSoon']);
    Route::get('/test', [PageController::class, 'test']);
    Route::get('/page2', [PageController::class, 'test']);
});
