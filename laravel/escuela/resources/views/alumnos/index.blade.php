<h2>LISTADO DE ALUMNOS</h2>

<table style="border:2px solid red">
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
            <td> {{ $alumnoo->telefono }}</td>
            <td> {{ $alumno->direccion }}</td>
        </tr>
    @endforeach
</table>