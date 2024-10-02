<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Array</title>
</head>
<body>
    <?php
    $dia[0] = "domingo";
    $dia[1] = "lunes";
    $dia[2] = "martes";
    $dia[3] = "miércoles"; 
    $dia[4] = "jueves";
    $dia[5] = "viernes";
    $dia[6] = "sábado";

    $mes = array("enero", "febrero", "marzo");

    // Mostrar el viernes
    echo "Día: " . $dia[5].'<br>' ;

    // Imprimir febrero
    echo "Mes: " . $mes[1];

    $autos = array("Volvo", "BMW", "Toyota");
    $arrayLongitud = count($autos);

    for ($x = 0; $x < $arrayLongitud; $x++) {
        echo "<br>" . $autos[$x];
    }
    ?>
</body>
</html>