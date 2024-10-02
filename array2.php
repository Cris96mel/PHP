<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8' />
    <title>Array 2</title>
</head>
<body>
    <?php
    $edades = array('Moises' => '33', 'Camila' => '25', 'Samanta' => '17');
    echo 'Camila tiene ' . $edades['Camila'] . ' años.' . '<br>';
    echo 'Moises tiene ' . $edades['Moises'] . 'años.' . '<br>';
    echo 'Samanta tiene ' .  $edades['Samanta'] . 'años.' . '<br>';

    echo '<br>'; // Salto de línea

    foreach ($edades as $x => $valor) {
        echo 'Clave=' . $x . ', valor=' . $valor;
        echo '<br>';
    }
    ?>
</body>
</html>