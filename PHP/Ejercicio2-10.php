<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2-8</title>
</head>
<body>

<?php

$numerosPares = '';

    for ($numero = 6; $numero <= 50; $numero += 2) {
        $numerosPares .= $numero;
        if ($numero < 50 - 1) {
            $numerosPares .= ', ';
        }
    }

        echo $numerosPares;

?>

<?php

$numeropar = 0;
    do {
        $numeropar += 2;
        echo $numeropar . "<br>";
    } while ($numeropar < 50);

?>

</body>
</html>