<?php
include("conexion.php");
$id_ciudad = $_POST['id_ciudad'];
$id_pais = $_POST['id_pais'];
$habitantes = $_POST['habitantes'];
$superficie = $_POST['superficie'];
$tiene_metro = $_POST['tieneMetro'];

$superint = (float)$superficie;
$habitantesint = (int)$habitantes;

if ($tiene_metro != "S" && $tiene_metro != "N"){
    echo "El valor para 'Nuevo Metro' debe ser 'S' o 'N'.";
    die();
}
if ($habitantesint <= 0){
    echo "El número de habitantes debe ser mayor a 0.";
    die();
}
else if ($superint <= 0){
    echo "La superficie debe ser mayor a 0.";
    die();
}

if ($tiene_metro == "S") {
    $tiene_metro = 1;
}
else {
    $tiene_metro = 0;
}

$consulta = "UPDATE ciudades SET habitantes = $habitantesint, superficie = $superint, tieneMetro = $tiene_metro WHERE ciudad = '$id_ciudad' AND pais = '$id_pais'";
mysqli_query($link, $consulta) or die ("Problemas al actualizar la ciudad en la base de datos");
mysqli_close($link);
header("Location: Menu.html");
?>