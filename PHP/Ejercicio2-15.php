<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Generada con PHP</title>
</head>
<body>

<h2>Mostrar contenido</h2>

<?php
echo "ForEach" . "<br>";
$notas = array("Iker"=>"3.5", "Martina"=>"7", "Anurag"=>"6.3");
foreach ($notas as $nombre => $nota) {
    echo "La nota de " . $nombre . " es " . $nota . "<br>";
}

echo "Buscar directamente" . "<br>";
echo "Nota de Iker: " . $notas['Iker'] . "<br>";
echo "Nota de Martina: " . $notas['Martina'] . "<br>";
echo "Nota de Anurag: " . $notas['Anurag'] . "<br>";

echo "Mostrar claves" . "<br>";
$clave = array_keys($notas);

?>

</body>
</html>