<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumno::paginate(10);
        return view('alumnos.index', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alumnos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request ->validate([
            'nombre_ape' => 'required|min:5',
            'edad' => 'required'
        ]);

        $alumno = new Alumno();
        $alumno->nombre_ape = $request->nombre_ape;
        $alumno->edad = $request->edad;
        $alumno->telefono = $request->telefono;
        $alumno->direccion = $request->direccion;
        $alumno->save();
        return redirect()->route('alumnos.show',$alumno);
    }

    /**
     * Display the specified resource.
     */
    public function show($alumno)
    {
        $alumno = Alumno::find($alumno);
        return view('alumnos.show', compact('alumno'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        //Pasandole $id en vez de alumno se haría asi, de lo contrario lo hace auto
        //$alumno = Alumno::find($id);
        return view('alumnos.edit', compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumno $alumno)
    {
        $alumno->nombre_ape = $request->nombre_ape;
        $alumno->edad = $request->edad;
        $alumno->telefono = $request->telefono;
        $alumno->direccion = $request->direccion;
        $alumno->save();
        return redirect()->route('alumnos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect()->route('alumnos.index');
    }  
    
    
    // Confirmar eliminación de alumno
    public function confirm(Alumno $alumno)
    {
        return view('alumnos.confirm', compact('alumno'));
    }
}
