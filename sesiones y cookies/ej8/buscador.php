<?php
include("conecti.php");

$cancion = $_POST['nomCancion'];

$consulta = "SELECT * FROM buscador WHERE canciones LIKE '%$cancion%'";
$resultado = mysqli_query($link, $consulta);

echo "<h1>Resultados de búsqueda</h1>";
if (mysqli_num_rows($resultado) > 0) {
    //como recordatorio, este array es TRUE mientras se pueda seguir 
    //trayendo contenido desde $resultado, una vez que no haya 
    //nada más se vuelve NULL y sale del while
    while ($array = mysqli_fetch_array($resultado)) {
        echo "- " . $array['canciones'] . "<br>";
    }
} else {
    echo "No hay resultados para: " . $cancion;
}

mysqli_free_result($resultado);
?>
<br>
<a href="buscador.html">Volver a buscar</a>