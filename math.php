<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'/>
    <title>Math</title>
</head>
<body>
<?php
echo(pi()); //retorna el valor de PI

echo (min(0, 150, 30, 20, -8, -200)); //retorna el menor
echo (max(0, 150, 30, 20, -8, -200)); //retorna el mayor

echo(abs(-6.7)); //retorna el valor absoluto

echo(sqrt(64)); // retorna la raiz cuadrada

echo(round(0.60)); //redondea hacia arriba si el valor es >= .5 
echo(round(0.49)); //redondea hacia abajo si el valor es <= .5

echo(rand()); //valor random
echo(rand(10, 100));
?>
</body>
</html>