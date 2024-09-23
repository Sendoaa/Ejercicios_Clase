<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Generada con PHP</title>
</head>
<body>

<h2>Numero random</h2>

<?php

$numSecreto = 7;
$intentos = 0;
$numRandom = rand(1, 10);
do{
    $numRandom = rand(1, 10);
    $intentos++;
    if($numRandom==$numSecreto){
        echo "Has acertado el número secreto <br>";
    } else {
        echo "No has acertado el número secreto <br>";
    }
} while (($intentos<5)&&($numRandom != $numSecreto));

echo "Fin de rondas";

?>

</body>
</html>