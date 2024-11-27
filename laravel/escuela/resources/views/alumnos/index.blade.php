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
            <td> {{ $alumno->nombre }}</td>
            <td> {{ $alumno->edad }}</td>
            <td> {{ $alumno->telefono }}</td>
            <td> {{ $alumno->direccion }}</td>
            <td><a href="">Edit</a></td>
            <td>---</td>
            <td><a href="">Delete</a></td>
        </tr>
    @endforeach
</table>

{{-- Paginacion --}}
{{ $alumnos->links() }}