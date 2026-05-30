<?php
if (isset($_POST['estilo'])){
    $eleccion = $_POST['estilo'];
    setcookie("estiloMemoria", $eleccion, time()+86400*365); 
    //el nombre estiloMemoria es el que dsps me va a servir para recuperarla si ya existia
}   //si el usuario no elige nada, muestra lo guardado en la cookie con la superglobal y el nombre antes dado
else{
    if(isset($_COOKIE['estiloMemoria'])){
        $eleccion = $_COOKIE['estiloMemoria'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies php ej 1</title>
    <?php
    //llamo al estilo que cree
        if (isset($eleccion)) {
            echo '<link rel="StyleSheet" type="text/css" href="' . $eleccion . '.css">';
        }
    ?>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Seleccione el estilo que quiere para la pagina! 
        <br />
        <select name="estilo">
            <option value="rojo">Rojo</option>
            <option value="azul">Azul</option>
            <option value="verde">Verde</option>
        </select>
        <input type="submit" value="Actualizar"> 
    </form>
</body>
</html>