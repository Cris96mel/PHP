<?php
session_start();
$usuario = "";
if(isset($_SESSION['usuario'])){
    $usuario = $_SESSION['usuario'];
} else {
    if(isset($_POST['usuario'])){
        $_SESSION['usuario'] = $_POST['usuario'];
        $usuario = $_POST['usuario'];
    } else {
        $usuario = "Anónimo";
    }
}
?>
<input type="text" value="<?php echo $usuario; ?>">