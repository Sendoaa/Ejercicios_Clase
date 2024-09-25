<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3-4</title>
</head>
<body>
    
<p>COLORES<p>
<form action="Ejercicio3-4_Colores.php" method="post">
    <label for="color">Selecciona un color:</label><br><br>
    
    <input type="radio" id="rojo" name="color" value="#FF0000">
    <label for="rojo">Rojo</label><br>

    <input type="radio" id="verde" name="color" value="#00FF00">
    <label for="verde">Verde</label><br>
    
    <input type="radio" id="azul" name="color" value="#0000FF">
    <label for="azul">Azul</label><br>

    <input type="radio" id="amarillo" name="color" value="#FFFF00">
    <label for="amarillo">Amarillo</label><br>

    <input type="radio" id="morado" name="color" value="#800080">
    <label for="morado">Morado</label><br><br>
    
    <input type="submit" value="Enviar">
</form>

</body>
</html>