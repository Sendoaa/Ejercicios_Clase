<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;

// Route::get('/', function () {
//     return view('alumnos.index');
// });

Route::get('/', [AlumnoController::class, 'index']);
Route::get('alumnos', [AlumnoController::class, 'index'] )->name('alumnos.index');
Route::get('alumnos/create', [AlumnoController::class,'create'])->name('alumnos.create');
Route::get('alumnos/{alumno}', [AlumnoController::class, 'show'])->name('alumnos.show');
Route::get('alumnos/edit/{alumno}', [AlumnoController::class, 'edit'] )->name('alumnos.edit');
Route::put('alumnos/update/{alumno}', [AlumnoController::class,'update'])->name('alumnos.update');
Route::get('alumnos/confirm/{alumno}', [AlumnoController::class, 'confirm'])->name('alumnos.confirm');
Route::delete('alumnos/delete/{alumno}', [AlumnoController::class, 'destroy'])->name('alumnos.destroy');
Route::post('alumnos/store', [AlumnoController::class,'store'])->name('alumnos.store');