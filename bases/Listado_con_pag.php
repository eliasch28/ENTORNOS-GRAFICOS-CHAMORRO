<html>
<head>
    <title>Listado de Ciudades Con Paginación</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php 
include("conexion.php");
$cantPorPags = 2;
$pagina = isset ( $_GET['pagina']) ? $_GET['pagina'] : null ;
if (!$pagina) {
    $inicio = 0;
    $pagina = 1;
}
else {
    $inicio = ($pagina - 1) * $cantPorPags;
}
$consulta = "SELECT * FROM ciudades";
$resultado = mysqli_query($link,$consulta);
$totalRegistros = mysqli_num_rows($resultado);
$total_paginas = ceil($totalRegistros / $cantPorPags); //ceil redondea
?>
    <div class="txt">
<?php
echo "Numero de registros encontrados: " . $totalRegistros . "<br>";
echo "Se muestran paginas de " . $cantPorPags . " registros cada una<br>";
echo "Mostrando la pagina " . $pagina . " de " . $total_paginas . "<p>";
mysqli_free_result($resultado);
$consultaPaginada = "SELECT * FROM ciudades LIMIT " . $inicio . "," . $cantPorPags;
$resultadoPaginado = mysqli_query($link, $consultaPaginada);
?>
    </div>
    <div class="contenedorTabla">
        <table class="alta">
            <tr>
                <td colspan="5"><strong><p style="color: red">Listado de Ciudades con Paginación</p><strong></td>
            </tr>
            <tr class="lista">
                <td><p>Ciudad</p></td>
                <td><p>País</p></td>
                <td><p>Habitantes</p></td>
                <td><p>Superficie</p></td>
                <td><p>Tiene Metro</p></td>
            </tr>
<?php
while ($fila = mysqli_fetch_array($resultadoPaginado)){
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
mysqli_free_result($resultadoPaginado);
mysqli_close($link);
?>
        </table>
    </div>
    <div class="txt">
<?php
if ($total_paginas > 1){
for ($i=1;$i<=$total_paginas;$i++){
if ($pagina == $i){
echo $pagina . " ";
}
else{
echo "<a href='Listado_con_pag.php?pagina=" . $i ."'>" . $i . "</a> ";
}

}
}
?>
    </div>
    <div class="txt">
        <p><a href="Menu.html">Volver al Menú</a></p>
    </div>
</body>
</html>

