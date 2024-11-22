<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina principal</title>
</head>
<body>
    <h1>Bienvenido a la pagina principal</h1>

    <x-curso-card>
        <x-slot name="nombre">
            Curso1
        </x-slot>

        <x-slot name="descripcion">
            Descripcion
        </x-slot>

        <x-slot name="link">
            Enlace
        </x-slot>
    </x-curso-card>
</body>
</html>