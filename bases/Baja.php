<?php
include("conexion.php");
$ciudad = $_POST['ciudad'];
$pais = $_POST['pais'];

$consulta = "SELECT * FROM ciudades WHERE ciudad = '$ciudad' AND pais = '$pais'";
$resultado = mysqli_query($link, $consulta);
if (mysqli_num_rows($resultado) == 0) {
    echo "La ciudad no existe en la base de datos.";
    die();
}
$extraido = mysqli_fetch_array($resultado);
mysqli_free_result($resultado);
?>
<html>
<head>
    <title>Baja de Ciudad</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="txt">
        <p>Ciudad a dar de baja: <strong style="color: red;"><?php echo $extraido['ciudad']; ?></strong></p>
        <p class="txtApoyo">País de la ciudad: <strong style="color: red;"><?php echo $extraido['pais']; ?></strong></p>
    </div>
    <form action="Eliminar.php" method="post" class="contenedorTabla">
        <input type="hidden" name="id_ciudad" value="<?php echo $extraido['ciudad']; ?>">
        <input type="hidden" name="id_pais" value="<?php echo $extraido['pais'];?>">
        <table class="alta">
            <tr>
                <td><p>¿Confirma que desea dar de baja esta ciudad?</p></td>
            </tr>
            <tr>
                <td class="txt"><input type="submit" value="Confirmar Baja"></td>
            </tr>
            <tr>
                <td><p><a href="Menu.html">Volver al Menú</a></p></td>
            </tr>
        </table>
    </form>
</body>
</html>