@extends('layouts.plantilla')

@section('title', 'Crear Alumno')

@section('content')
<form method="post" action="{{ route('alumnos.store') }}">
    @csrf

    <label>Nombre y apellidos</label>
    <input type="text" id="nombre_ape" name="nombre_ape" value="">
    
    <label for="edad">Edad</label>
    <input type="text" id="edad" name="edad" value="">
    
    <label for="telefono">Teléfono</label>
    <input type="text" id="telefono" name="telefono" value="">
    
    <label for="direccion">Dirección</label>
    <input type="text" id="direccion" name="direccion" value="">
    
    <button type="submit">ENVIAR</button>
</form>
@endsection