<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2-8</title>
</head>
<body>

<?php

$num = 8;
$multiplo = 1;
echo $num . " x " . $multiplo . " = " . $num * $multiplo . "<br>";
do {
$multiplo++;
echo $num . " x " . $multiplo . " = " . $num * $multiplo . "<br>";
} while ($multiplo < 10);
?>

</body>
</html>