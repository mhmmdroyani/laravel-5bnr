<?php

use App\Http\Controllers\ProdiController;
use App\Http\Controllers\MatakuliahController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Route::get('/prodi', [ProdiController::class, 'index']);
Route::resource('prodi', ProdiController::class);
Route::resource('matakuliah', MatakuliahController::class);
