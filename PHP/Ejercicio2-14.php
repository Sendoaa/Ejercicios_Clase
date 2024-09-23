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

$arrayNumeros = array(1,25,40,4,8,32,5);
$resultado = 0;
echo "Los numeros que tenemos que sumar son: ";
foreach ($arrayNumeros as $numero) {
    echo $numero . "-";
}
foreach ($arrayNumeros as $numero) {
    $resultado += $numero;
}
echo "<br>El resultado de la suma es: " . $resultado;
?>

</body>
</html>