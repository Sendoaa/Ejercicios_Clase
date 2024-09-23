<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 2-18</title>
</head>

<body>

    <h2>2-18</h2>

    <?php

    $peliculas = array("The Shawshank Redemption", "The Godfather", "The Dark Knight", "Pulp Fiction", "The Lord of the Rings: The Return of the King", "Forrest Gump", "Inception", "Fight Club", "The Matrix", "Goodfellas");
    sort($peliculas);

    foreach ($peliculas as $pelicula) {
        print_r($pelicula . "<br>");
    }
    ?>

</body>

</html>