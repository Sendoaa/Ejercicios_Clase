@extends('layouts.plantilla')

@section('title', 'Crear Alumno')

@section('content')
<h2>ELIMINAR ALUMNO</h2>
<form action="{{ route('alumnos.destroy', $alumno) }}" method="POST"">
@csrf
@method('delete')
<button type="submit">Eliminar</button>
<a href="{{ route('alumnos.index')}}">Cancelar</a>
</form>
@endsection