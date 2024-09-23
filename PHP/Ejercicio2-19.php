<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 2-19</title>
</head>

<body>

    <h2>2-19</h2>

    <?php

    $paises = array("alemania", "rumania", "italia", "chile", "uruguay", "australia");
    $paises = array_diff($paises, ["alemania", "chile", "australia"]);
    array_push($paises, "argentina", "bolivia");
    sort($paises);
    foreach ($paises as $pais) {
        echo $pais . "<br>";
    }
    ?>

</body>

</html>