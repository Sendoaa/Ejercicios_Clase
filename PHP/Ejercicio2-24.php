<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 2.21</title>
</head>
<body>

<h2>Ejercicio 2.21repaso</h2>
<?php

function IncrementarValor($valor){
    static $num_estatico = 0;
    $num_estatico += $valor;
    return $num_estatico;
}

for ($i = 0; $i <= 3; $i++){
    $valor = rand(1, 10);
    $resultado = IncrementarValor($valor);
    echo "$i vez, incrementa $valor, resultado: $resultado<br>";
}

?>

</body>
</html>