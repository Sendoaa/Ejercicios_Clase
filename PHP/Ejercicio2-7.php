<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2p4</title>
</head>
<body>

<?php

$nombre1 = "Elisabet";
$apellido1 = "Lekue";
$apellido2 = "Alkorta";
const NOMBREPERMITIDO = "Elisabet Lekue Alkorta";

$partes = explode(' ', NOMBREPERMITIDO);
$nombreConstante = $partes[0];
$apellidoConstante1 = $partes[1];
$apellidoConstante2 = $partes[2];

if ($nombre1 == $nombreConstante && $apellido1 == $apellidoConstante1 && $apellido2 == $apellidoConstante2) {
    echo " La constante es: " . NOMBREPERMITIDO;
} else {
    echo "Acceso denegado $nombre1.";
}

?>

<?php 
    $nombre1 = "Elisabeth";
    $apellido1 = "Lekue";
    $apellido2 = "Alkorta";
    const NOMBREPERMITIDO1 ="Elisabeth Lekue Alkorta";
    $partes = explode(" ", NOMBREPERMITIDO1);
    $nombre = $partes[0];
    $primerApellido = $partes[1];
    $segundoApellido = $partes[2];
    if ($nombre1 != $nombre) {
        echo "El nombre es incorrecto<br>";
    }elseif ($apellido1 != $primerApellido) {
        echo "El primer apellido es incorrecto<br>";
    }else if ($apellido2 != $segundoApellido) {
        echo "El segundo apellido es incorrecto<br>";
    }else {
        echo "Acceso Garantizado";
    }
    ?>

</body>
</html>