<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 2.4</title>
</head>
<body>

<h2>Ejercicio 2.12repaso</h2>
<?php
$cazar_si_no = rand(0, 1);

if ($cazar_si_no == 1) {
    $num = rand(1,7);
    switch($num){
        case 1: $coloraleatorio ="rojo";break;
        case 2: $coloraleatorio ="naranja";break;
        case 3: $coloraleatorio ="amarillo";break;
        case 4: $coloraleatorio ="verde";break;
        case 5: $coloraleatorio ="azul";break;
        case 6: $coloraleatorio ="añil";break;
        case 7: $coloraleatorio ="violeta";break;
    }
echo "Color aleatorio: $coloraleatorio<br>";
echo "Tiene disponibles estos colores: ";
} else echo "Hay nube;"

?>