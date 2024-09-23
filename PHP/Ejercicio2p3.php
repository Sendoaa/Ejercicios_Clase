<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2p3</title>
</head>
<body>
    

<?php
$text = 'This is a test';
echo strlen($text);
echo $text[strlen($text)-1];
echo substr_count($text, 'is');
echo substr_count($text, 'is', 3);
echo substr_count($text, 'is', 3, 3);
echo substr_count($text, 'is', 5, 10);
echo substr_count("Hello World. The world is nice","world");
?>

</body>
</html>