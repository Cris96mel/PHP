<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8' />
    <title>Array 2</title>
</head>
<body>
    <?php
    $productos = array(
        array('Heladera', 25000000, 18),
        array('Microonda', 1500000, 9),
        array('Cocina', 590000, 21),
        array('Licuadora', 450000, 15),
        array('Mixer', 260000, 5),
        array('Ventilador', 150000, 15)
    );

    // Imprimir todos los valores   

    echo '<h2>Productos con precio menor o igual a $1000000:</h2>';
    foreach ($productos as $producto) {
        if ($producto[1] <= 1000000) {
            echo 'Producto: ' . $producto[0] . ', Precio: $' . $producto[1] . ', Stock: ' . $producto[2] . '<br>';
        }
    }

    // Imprimir solo los productos con (Precio <= 1000000)
    echo '<h2>Productos con precio menor a $1000000:</h2>';
    foreach ($productos as $producto) {
        if ($producto[1] < 1000000) {
            echo 'Producto: ' . $producto[0] . ', Precio: $' . $producto[1] . ', Stock: ' . $producto[2] . '<br>';
        }
    }
    ?>
</body>
</html>