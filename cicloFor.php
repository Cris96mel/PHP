<!doctype html>
<html>
<head>
    <title>Edad</title>
    <meta charset='UTF-8'/>
</head>
<body>
<?php
//imprimir una tabla de multiplicar con for()
//luego mejorar para imprimir todas las tablas del 1 al 10
for ($tabla = 1; $tabla <= 10; $tabla++) {
    echo "Tabla del $tabla:<br>";
    for ($i = 1; $i <= 10; $i++) {
        echo "$tabla x $i = " . ($tabla * $i) . "<br>";
    }
    echo "<br>";
}
?>
</body>
</html>
