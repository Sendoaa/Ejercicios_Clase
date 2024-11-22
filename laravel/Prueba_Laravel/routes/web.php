<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/',HomeController::class);
Route::get('/cursos', [CursoController::class, 'index']);
Route::get('/cursos/create', [CursoController::class, 'create']);
Route::get('/cursos/{curso}', [CursoController::class, 'show']);

//Devuelve una vista, está ubicada en /resources/views
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return "Hola clase de 2DW3";
// });

// Route::get('cursos', function() {
//     return "Cursos para 2DW3";
// });

// Route::get('cursos/{curso}', function($curso): string {
//     return "Bienvenido al curso ". $curso;
// });

// Route::get('cursos/{curso}/{categoria?}', function($curso, $categoria = null) {
//     if ($categoria) {
//         return "Bienvenido al curso $curso de la categoría $categoria";
//     } else {
//         return "Bienvenido al curso $curso";
//     }
// });