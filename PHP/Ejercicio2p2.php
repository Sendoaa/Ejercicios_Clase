<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2p2</title>
</head>
<body>
    
<?php
$a = 5;
$b = 3;

// Operación con pre-incremento (++$a)
$b = ++$a;
echo "Con la operación b=++a el valor de a es $a y el de b es $b <br>";

// Reiniciar valores
$a = 5;
$b = 3;

// Operación con post-incremento (a++)
$b = $a++;
echo "Con la operación b=a++ el valor de a es $a y el de b es $b <br>";
?>

</body>
</html>