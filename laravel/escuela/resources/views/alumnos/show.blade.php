@extends('layouts.plantilla')

@section('title', 'Listado de Alumnos')

@section('content')
<h2>MOSTRAR ALUMNO</h2>
<table style="border:2px solid black">
    <tr>
        <td>Nombre</td>
        <td>{{ $alumno->nombre_ape }}</td>
    </tr>
    <tr>
        <td>Edad</td>
        <td>{{ $alumno->edad }}</td>
    </tr>
    <tr>
        <td>Teléfono</td>
        <td>{{ $alumno->telefono }}</td>
    </tr>
    <tr>
        <td>Dirección</td>
        <td>{{ $alumno->direccion }}</td>
    </tr>
</table>
@endsection

<style>
table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #f5f5f5;
}

a {
    color: #3490dc;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}
</style>