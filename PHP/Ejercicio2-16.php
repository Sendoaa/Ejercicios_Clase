<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 2-16</title>
</head>

<body>

    <h2>2-16</h2>

    <?php

    echo "ALUMNOS" . "<br>";
    $alumnos = array(
        'Enara' => array(
            'Apellidos' => 'Arnaiz Alonso',
            'Edad' => 19,
            'Ciclo' => 'DW3'
        ),
        'Nestor' => array(
            'Apellidos' => 'López Rodriguez',
            'Edad' => 30,
            'Ciclo' => 'AS3'
        ),
        'Peio' => array(
            'Apellidos' => 'Hernando Gómez',
            'Edad' => 27,
            'Ciclo' => 'DM3'
        ),
    );

    foreach ($alumnos as $nombre => $alumno) {
        echo "Nombre: " . $nombre . "<br>";
        echo "Apellidos: " . $alumno['Apellidos'] . "<br>";
        echo "Edad: " . $alumno['Edad'] . "<br>";
        echo "Ciclo: " . $alumno['Ciclo'] . "<br>";
        echo "<br>";
    }

    ?>

</body>

</html>