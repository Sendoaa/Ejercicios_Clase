<h2>Editar Alumno</h2>
<form action="{{ route('alumnos.edit', $alumno->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" value="{{ $alumno->nombre }}">
    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="apellido" value="{{ $alumno->apellido }}">

    <div class="form-group">
        <label for="email">Email:</label>
