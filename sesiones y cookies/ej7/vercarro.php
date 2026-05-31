<?php
session_start();
if(isset($_SESSION['carro'])){
    $carro = $_SESSION['carro'];
} else {
    $carro = array();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VerCarro</title>
</head>
<body>
    <h1>Carrito de Compras</h1>
    <table>
        <tr>
            <td>Producto</td>
            <td>Precio</td>
            <td>Cantidad</td>
            <td>Subtotal</td>
            <td>Acción</td>
        </tr>
        <?php
        $suma = 0;
        foreach($carro as $k => $v){
            $subto = $v['cantidad'] * $v['precio'];
            $suma = $suma + $subto;
        ?>
        <tr>
            <td><?php echo $v['producto'] ?></td>
            <td><?php echo $v['precio'] ?></td>
            <td><?php echo $v['cantidad'] ?></td>
            <td><?php echo $subto ?></td>
            <td><a href="borrar.php?id=<?php echo $v['id'] ?>&<?php echo SID ?>">Quitar</a></td>
        </tr>
        <?php } ?>
    </table>
    <h2>Total: $<?php echo number_format($suma, 2); ?></h2>
    <a href="vaciar.php?<?php echo SID ?>">Vaciar carro</a>
    <a href="catalogo.php?<?php echo SID ?>">Seguir comprando</a>
</body>
</html>
