<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    // public function index(){
    //     return "Cursos disponibles para la clase de 2DW3";
    // }

    public function index(){
        return view('cursos.index');
    }

    public function create(){
        return view('cursos.create');
    }

    public function show($curso){
        return view('cursos.show',['curso'=>$curso]);
    }
}