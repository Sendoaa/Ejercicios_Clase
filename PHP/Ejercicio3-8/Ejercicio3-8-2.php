<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Ejercicio 3-4</title>
</head>
    
<body>
<div class="div">
<?php
if (isset($_FILES['imagen'])) {
    $imagen = $_FILES['imagen'];
    $nombreImagen = $imagen['name'];
    $nombreTmpFichero = $imagen['tmp_name'];

    $nombreImagen = "img/" . $nombreImagen;

    if (move_uploaded_file($nombreTmpFichero, $nombreImagen)) {
        echo "<p style='color:green'>La imagen se ha subido correctamente.</p>";
    } else {
        echo "<p style='color:red'>Ha ocurrido un error al subir la imagen.</p>";
    }
} else {
    echo "<p style='color:red'>No se ha subido ninguna imagen.</p>";
}

if(isset($_POST['nombre'])){
    $nombreEnviado = $_POST['nombre'];
}

if(isset($_POST['apellido'])){
    $apellidoEnviado = $_POST['apellido'];
}

if(isset($_POST['edad'])){
    $edadEnviada = $_POST['edad'];
}

echo "<h1>Datos de alumnos</h1>";

echo "<p>Nombre: $nombreEnviado</p>";
echo "<p>Apellido: $apellidoEnviado</p>";
echo "<p>Edad: $edadEnviada</p>";

echo "<h1>Imagen</h1>";

echo "<p>Imagen: " . $_FILES['imagen']['name'] . "</p>";
echo "<p>Tipo de imagen: " . $_FILES['imagen']['type'] . "</p>";
echo "<p>Tamaño de imagen: " . ($_FILES['imagen']['size']/1024) . " Kb</p>";

echo "<p><img src='$nombreImagen' alt=''></p>";

?>
</div>
</body>
</html>