<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 2-17</title>
</head>

<body>

    <h2>2-17</h2>

    <?php

    $frutas = array("naranja", "platano");
    array_push($frutas, "manzana", "fresa", "uva", "sandia", "melon", "pera", "coco");

    foreach ($frutas as $fruta) {
        echo $fruta . "<br>";
    }

    ?>

</body>

</html>