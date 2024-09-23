<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2p4</title>
</head>
<body>

<?php

$diaSemana = date("w");
$dia = date("d");
$mes = date("n");
$ano = date("Y");

$nombreDiaSemana = "";
$nombreMes = "";

switch ($diaSemana) {
        case 1: $nombreDiaSemana = "Lunes"; 
    break;
        case 2: $nombreDiaSemana = "Martes";
    break;
        case 3: $nombreDiaSemana = "Miércoles";
    break;
        case 4: $nombreDiaSemana = "Jueves";
    break;
        case 5: $nombreDiaSemana = "Viernes";
    break;
        case 6: $nombreDiaSemana = "Sábado";
    break;
        case 7: $nombreDiaSemana = "Domingo";
}

switch ($mes) {
        case 1: $nombreMes = "Enero";
    break;
        case 2: $nombreMes = "Febrero";
    break;
        case 3: $nombreMes = "Marzo";
    break;
        case 4: $nombreMes = "Abril";
    break;
        case 5: $nombreMes = "Mayo";
    break;
        case 6: $nombreMes = "Junio";
    break;
        case 7: $nombreMes = "Julio";
    break;
        case 8: $nombreMes = "Agosto";
    break;
        case 9: $nombreMes = "Septiembre";
    break;
        case 10: $nombreMes = "Octubre";
    break;
        case 11: $nombreMes = "Noviembre";
    break;
        case 12: $nombreMes = "Diciembre";
}

echo "$nombreDiaSemana, $dia de $nombreMes de $ano";

?>

</body>
</html>