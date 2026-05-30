<?php
session_start();
if ((isset($_POST['nombre']))&&(isset($_POST['contraseña']))){
    $_SESSION['nombreUsuario']=$_POST['nombre'];
    $_SESSION['claveUsuario']=$_POST['contraseña'];
}
header("Location: recuperar.php");
exit;
?>