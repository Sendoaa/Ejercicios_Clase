@extends('layouts.plantilla')

@section('title', 'Crear Alumno')

@section('content')
<h2>Crear ALumno</h2>
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

<style>
    form {
        display: flex;
        flex-direction: column;
        width: 300px;
        margin: auto;
    }

    label {
        margin-top: 10px;
    }

    input {
        margin-bottom: 10px;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button {
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }
</style>