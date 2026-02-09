<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LatihanController;

Route::get('/', function () {
    return view('welcome', ['nama' => 'Mahasiswa  STMIK IKMI']);
});

Route::get('/latihan', [LatihanController::class, 'index']); 

Route::get('/matakuliah', [LatihanController::class, 'matakuliah']);
