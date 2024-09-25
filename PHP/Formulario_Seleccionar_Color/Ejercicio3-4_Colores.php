<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3-4</title>
</head>
    
<?php
if(isset($_POST['color'])){
    $colorSeleccionado = $_POST['color'];
    echo '<body style="background-color:' . $colorSeleccionado . ';">';
    $mensaje = "Color seleccionado: $colorSeleccionado";
} else {
    $mensaje = "No se ha seleccionado color.";
}

echo '<h1>' . $mensaje . '</h1>';

?>

<p><a href="Ejercicio3-4.php">Selecciona otro color:</a></p>

</body>
</html>