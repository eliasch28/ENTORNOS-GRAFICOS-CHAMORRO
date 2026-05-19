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
        <title>Modificación de Ciudad</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="txt">
            <p>Ciudad A Modficar: <strong style="color: red;"><?php echo $extraido['ciudad']; ?></strong></p>
            <p class="txtApoyo">País A Modificar: <strong style="color: red;"><?php echo $extraido['pais']; ?></strong></p>
        </div>
        <form action="Actualizar.php" method="post" class="contenedorTabla">
        <input type="hidden" name="id_ciudad" value="<?php echo $extraido['ciudad']; ?>">
        <input type="hidden" name="id_pais" value="<?php echo $extraido['pais']; ?>">
        <table class="alta">
            <tr style="background-color: cyan;">
                <td><p>Viejos Habitantes: <?php echo $extraido['habitantes']; ?></p></td><br><br>
            </tr>
            <tr>
                <td><p>Nuevos Habitantes:</p> <input type="text" name="habitantes" required></td><br><br>
            </tr>
            <tr style="background-color: cyan;">
                <td><p>Vieja Superficie (m²): <?php echo $extraido['superficie']; ?></p></td><br><br>
            </tr>
            <tr>
                <td><p>Nueva Superficie (m²):</p> <input type="text" name="superficie" required></td><br><br>
            </tr>
            <tr style="background-color: cyan;">
                <td><p>Viejo Metro: <?php if ($extraido['tieneMetro'] == 1) { echo "Sí"; } else { echo "No"; } ?></p></td><br><br>
            </tr>
            <tr>
                <td><p>Nuevo Metro(S/N):</p> <input type="text" name="tieneMetro" required></td><br><br>
            </tr>
            <tr>
                <td class="txt"><input type="submit" value="Modificar Ciudad"></td>
            </tr>
            <tr>
                <td><p><a href="Menu.html">Volver al Menú</a></p></td>
            </tr>
        </table>
    </form>
    </body>
</html>
<?php
mysqli_close($link);
?>