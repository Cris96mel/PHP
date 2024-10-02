<!doctype html>
<html>
<head>
        <title>Edad</title>
        <meta charset='UTF-8'/>
</head>
<body>
<?php
$edad = 20;

#condicional multiple que imprime un texto segun la edad
#mejora el codigo para que los rangos sean: 18 a 80 y menor 11 a 17
if($edad >=18 and $edad <= 80){
    echo 'Eres mayor de edad';
}else if($edad <= 17 and $edad >= 11){
    echo 'Eres menor e edad';   
}else{
    echo 'Algo anda mal :(';
}
?>
</body>
</html>