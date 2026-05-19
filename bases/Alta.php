<?php
include("conexion.php");
$ciudad = $_POST['ciudad'];
$pais = $_POST['pais'];
$habitantes = $_POST['habitantes'];
$superficie = $_POST['superficie'];
$tiene_metro = $_POST['tiene_metro'];

$superint = (float)$superficie;
$habitantesint = (int)$habitantes;

if ($tiene_metro != "S" && $tiene_metro != "N"){
    echo "El valor para 'Tiene Metro' debe ser 'S' o 'N'.";
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

$consulta = "SELECT * FROM ciudades WHERE ciudad = '$ciudad' AND pais = '$pais'";
$resultado = mysqli_query($link, $consulta);
if (mysqli_num_rows($resultado) > 0) {
    echo "La ciudad ya existe en la base de datos.";
    die();
}
mysqli_free_result($resultado);

$datos = "INSERT INTO ciudades (ciudad, pais, habitantes, superficie, tieneMetro) VALUES ('$ciudad', '$pais', $habitantesint, $superint, $tiene_metro)";
mysqli_query($link, $datos) or die ("Problemas al insertar la ciudad en la base de datos");
mysqli_close($link);
header("Location: Menu.html");

?>