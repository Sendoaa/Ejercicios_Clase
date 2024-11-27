@extends('layouts.plantilla')

@section('title', 'Listado de Alumnos')

@section('content')
<h2>Editar Alumno</h2>
<form action="{{ route('alumnos.update', $alumno) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="nombre_ape">Nombre y apellidos:</label>
    <input type="text" id="nombre_ape" name="nombre_ape" value="{{ $alumno->nombre_ape }}"><br>

    <label for="edad">Edad:</label>
    <input type="text" id="edad" name="edad" value="{{ $alumno->edad }}"><br>

    <label for="tlf">Telefono:</label>
    <input type="text" id="telefono" name="telefono" value="{{ $alumno->telefono }}"><br>

    <label for="direccion">Direccion:</label>
    <input type="text" id="direccion" name="direccion" value="{{ $alumno->direccion }}"><br>

    <button type="submit">Enviar actualización</button>
</form>
@endsection