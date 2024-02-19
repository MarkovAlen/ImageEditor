<?php

use App\Http\Controllers\BackgroundRmController;
use App\Http\Controllers\CleanupController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/upload-form-cleanup', [CleanupController::class, 'showForm']);
Route::post('/process-cleanup', [CleanupController::class, 'processCleanup'])->name('process-cleanup');
Route::get('/upload-form-rmbg', [BackgroundRmController::class, 'showForm']);
Route::post('/process-rmbg', [BackgroundRmController::class, 'processRmbg'])->name('process-rmbg');