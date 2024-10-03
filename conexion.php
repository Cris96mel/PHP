<?php
//crear el objeto mysqli
$host = "localhost";
$user = "root";
$password = "";
$database = "blog_db";
$port = 3306;

// Crear la conexión
$conn = new mysqli($host, $user, $password, $database, $port);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: (" . $conn->connect_errno . ") " . $conn->connect_error);
} else {
    echo "Conexión exitosa";
}
?>