<?php
// Se crea un array asociativo con los nombres de los meses del año.
$meses = array("enero", "febrero", "marzo",
               "abril", "mayo", "junio",
               "julio", "agosto", "setiembre",
               "octubre", "noviembre", "diciembre");

// Se obtiene la fecha actual en formato "año-mes-día" y se almacena en la variable $fecha.
$fecha = date("Y-m-d");

// Se extraen el día, mes y año de la fecha actual y se almacenan en las variables $dia, $mes y $anio respectivamente.
$dia = date("d");
$mes = date("n") - 1; // Se resta 1 al mes obtenido ya que los arrays en PHP comienzan en 0.
$anio = date("Y");

// Se imprime un mensaje en pantalla con la fecha actual formateada en español.
print("Hoy es: ".$dia." de ".$meses[$mes]." de ".$anio);
?>