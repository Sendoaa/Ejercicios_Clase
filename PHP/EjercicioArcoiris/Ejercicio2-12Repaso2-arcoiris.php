<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="arcoiris.css">
    <title>Ejercicio 2.12</title>
</head>
<body>

<h2>ARCOIRIS</h2>
<p>Consigue todos los colores del arcoiris</p>

<h1>¡Bienvenido al juego de 'Roba el Arco Iris'!</h1>
<p>Tu objetivo es recoger los colores del Arco Iris sin toparte con nubes o pajarracos</p>
<?php
    
    $colores = array('rojo', 'naranja', 'amarillo', 'verde', 'azul', 'añil', 'violeta');
    $coloresrecogidos = array();
    $ronda = 1;
    $colorcss = "";
    
    while(!empty($colores)){
        echo "<h2>Ronda $ronda</h2>";
        $cazar_si_no = rand(0, 1);
        if ($cazar_si_no == 1){
            $num_elementos = count($colores);
            $num = rand(0, $num_elementos - 1);
            $coloraleatorio = $colores[$num];
            $colores = array_values(array_diff($colores, array($coloraleatorio)));
            
            switch($coloraleatorio){
                case 'rojo': $colorcss = "red"; break;
                case 'naranja': $colorcss = "orange"; break;
                case 'amarillo': $colorcss = "yellow"; break;
                case 'verde': $colorcss = "green"; break;
                case 'azul': $colorcss = "blue"; break;
                case 'añil': $colorcss = "black"; break; /*Añil*/
                case 'violeta': $colorcss = "violet"; break;
            }

            echo "<p style='color: $colorcss;'>Color cazado: $coloraleatorio</p><br>";
            array_push($coloresrecogidos, $coloraleatorio);
            echo "Colores recogidos; ";
            foreach ($coloresrecogidos as $color){
                echo "$color, ";
            }
            echo "<br>";

            echo "Tienes disponibles los siguientes colores: ";
            foreach ($colores as $color){
                echo "$color, ";
            }
            echo "<br>";
        } else {
            echo "Te has encontrado una nube<br>";
        }

        $ronda++;
        
        $pajaro = rand(0, 5);
        if($pajaro == 3){
            echo "Te ha derribado un pajarraco. Has recogido un tota de " . count($coloresrecogidos) . " colores. <br>";
            echo "Fin del juego";
            exit;
        } else {
            echo "El pajaro no ha aparecido<br><br><br>";
        }
        
    }
    echo "Has cazado todos los colores<br>";

?>



</body>
</html>