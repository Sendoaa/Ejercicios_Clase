@extends('layouts.plantilla')

@section('title', 'Listado de Alumnos')

@section('content')
<h2>EDITAR ALUMNO</h2>
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
        margin-top: 20px;
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