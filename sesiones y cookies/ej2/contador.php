<?php
if(isset($_COOKIE['contador'])){
    $contador = $_COOKIE['contador'];
    $contador = $contador + 1;
    $msj = 'Esta es la visita numero: '.$contador;
}
else{
    $msj = 'Bienvenido al sitio web!';
    $contador = 1;
}

setcookie("contador", $contador, time()+86400*365); 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contador de Visitas</title>
</head>
<body>
    <h1>Página Contador</h1>
    <br />
    <?php echo $msj?>
</body>
</html>