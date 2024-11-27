<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;

// Route::get('/', function () {
//     return view('alumnos.index');
// });

Route::get('/', [AlumnoController::class, 'index']);

Route::get('alumnos', [AlumnoController::class, 'index'] )->name('alumnos.index');