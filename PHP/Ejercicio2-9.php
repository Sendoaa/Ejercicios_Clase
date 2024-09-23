<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Generada con PHP</title>
</head>
<body>

<h2>Tabla generada con PHP</h2>

<table border = 1>
    <?php
        $filas = 3;  // Número de filas
        $columnas = 4;  // Número de columnas

        // Generar la primera fila de cabecera
        echo "<tr><th></th>";  // Celda vacía en la esquina superior izquierda
        for ($col = 1; $col <= $columnas; $col++) {
            echo "<th>$col</th>";  // Celdas de la cabecera con los números de columna
        }
        echo "</tr>";

        // Generar el cuerpo de la tabla
        for ($fila = 1; $fila <= $filas; $fila++) {
            echo "<tr>";
            echo "<th>$fila</th>";  // Primera columna con los números de fila
            for ($col = 1; $col <= $columnas; $col++) {
                echo "<td>$fila-$col</td>";  // Celdas con formato "fila-col"
            }
            echo "</tr>";
        }
    ?>
</table>

</body>
</html>