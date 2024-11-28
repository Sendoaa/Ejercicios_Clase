@extends('layouts.plantilla')

@section('title', 'Listado de Alumnos')

@section('content')
<h2>LISTADO DE ALUMNOS</h2>

<table style="border:2px solid black">
    <tr>
        <th>Nombre </th>
        <th>Edad</th>
        <th>Telefono</th>
        <th>Direccion</th>
    </tr>
    @foreach ($alumnos as $alumno)
        <tr>
            <td><a href="{{ route('alumnos.show', $alumno->id) }}"> {{ $alumno->nombre_ape }} </a></td>
            <td> {{ $alumno->edad }}</td>
            <td> {{ $alumno->telefono }}</td>
            <td> {{ $alumno->direccion }}</td>
            <td><a href="{{ route('alumnos.edit', $alumno->id) }}">Editar alumno</a></td>
            <td>---</td>
            <td><a href="{{ route('alumnos.confirm', $alumno->id) }}">Delete</a></td>
        </tr>
    @endforeach
</table>

<style>
    svg  {
        width: 20px; /* Ajusta el tamaño según tus necesidades */
        height: auto; /* Mantiene la proporción de la imagen */
    }

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

{{-- Paginacion --}}
{{ $alumnos->links() }}
@endsection