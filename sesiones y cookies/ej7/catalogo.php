<?php 
session_start();
include("cone.php");

$consulta = "SELECT * FROM catalogo ORDER BY id ASC";
$resultado = mysqli_query($link, $consulta);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej7</title>
</head>
<body>
    <table>
        <tr>
            <td><strong>Producto</strong></td>
            <td><strong>Precio</strong></td>
            <td><strong>Acción</strong></td>
        </tr>
        <?php
        while ($arreglo=mysqli_fetch_array($resultado)){
        ?>
        <tr>
            <td><?php echo $arreglo['producto'] ?></td>
            <td><?php echo $arreglo['precio'] ?></td>
            <td>
                <a href="agregar.php?id=<?php echo $arreglo['id'];?>&<?php echo SID;?>">
                    Agregar Producto
                </a>
            </td>  
        </tr>
        <?php
        }
        ?>    
    </table> 
    <br />
    <a href="vercarro.php?<?php echo SID;?>">
        <strong>Ver Carrito</strong>
    </a>
</body>
</html>