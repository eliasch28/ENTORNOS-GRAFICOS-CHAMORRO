<?php
if(isset($_POST['nombre'])){
    $var = $_POST['nombre'];
    setcookie("galleta", $var, time()+86400*365);
}
else if(isset($_COOKIE['galleta'])){
    $var = $_COOKIE['galleta'];  
}
else{
    $var = 'No se han ingresado nombres aún.';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 3</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <?php echo 'Su ultimo nombre ingresado es: '.$var; ?>
        <br />
        Ingrese su nombre:
        <br />
        <input type="text" name="nombre" placeholder="Tu nombre..." required> 
        <input type="submit" value="Enviar"> 
    </form>
</body>
</html>