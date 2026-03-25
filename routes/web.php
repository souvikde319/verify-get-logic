<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ExcelController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [ExcelController::class, 'index']);
Route::post('/upload', [ExcelController::class, 'upload'])->name('upload');