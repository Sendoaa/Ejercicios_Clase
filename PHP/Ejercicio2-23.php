<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 2.21</title>
</head>
<body>

<h2>Ejercicio 2.21repaso</h2>
<?php

function CalcularIVA($precio, $iva=0.21){
    $calculoIVA = $precio * $iva;
    return $calculoIVA;
}

$precio = 100;
$iva = 0.18;

$calculoIVA = CalcularIVA($precio, $iva);

echo "El IVA de $precio con un IVA de $iva es $calculoIVA";

?>

</body>
</html>