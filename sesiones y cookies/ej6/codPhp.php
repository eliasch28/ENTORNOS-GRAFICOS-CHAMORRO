<?php
session_start();
include("conec.php");

$email = $_POST['email'];

$consulta = "SELECT * FROM alumnos WHERE mail = '$email'";
$resultado = mysqli_query($link, $consulta);
if (mysqli_num_rows($resultado) > 0) {
    $array = mysqli_fetch_array($resultado); 
    $_SESSION['nombreEncontrado'] = $array['nombre'];
}
mysqli_free_result($resultado);
header("Location: ej6.html");
exit;
?>