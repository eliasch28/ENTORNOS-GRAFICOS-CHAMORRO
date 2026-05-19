<?php
include("conexion.php");
$id_ciudad = $_POST['id_ciudad'];
$id_pais = $_POST['id_pais'];

$consulta = "DELETE FROM ciudades WHERE ciudad = '$id_ciudad' AND pais = '$id_pais'";
mysqli_query($link, $consulta) or die ("Problemas al eliminar la ciudad de la base de datos");
mysqli_close($link);
header("Location: Menu.html");
?>