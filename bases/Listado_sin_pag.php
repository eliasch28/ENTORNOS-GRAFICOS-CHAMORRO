<html>
<head>
    <title>Listado de Ciudades Sin Paginación</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
include("conexion.php");
$consulta = "SELECT * FROM ciudades";
$resultado = mysqli_query($link,$consulta);
?>
<div class="contenedorTabla">
    <table class="listado">
        <tr>
            <td colspan="5"><strong><p style="color: red">Listado de Ciudades sin Paginación</p><strong></td>
        </tr>
        <tr class="lista">
            <td><p>Ciudad</p></td>
            <td><p>País</p></td>
            <td><p>Habitantes</p></td>
            <td><p>Superficie</p></td>
            <td><p>Tiene Metro</p></td>
        </tr>
<?php
while ($fila = mysqli_fetch_array($resultado)){
?>
        <tr class="lista">
            <td><p><?php echo ($fila['ciudad']); ?></p></td>
            <td><p><?php echo ($fila['pais']); ?></p></td>
            <td><p><?php echo ($fila['habitantes']); ?></p></td>
            <td><p><?php echo ($fila['superficie']); ?></p></td>
            <td><p><?php echo ($fila['tieneMetro']); ?></p></td>
        </tr>
<?php
}
mysqli_free_result($resultado);
mysqli_close($link);
?>
    </table>
</div>
<div class="txt">
    <p><a href="Menu.html">Volver al Menú</a></p>
</div>
</body>
</html>
