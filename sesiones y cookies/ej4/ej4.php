<?php 
if(isset($_POST['titular'])){
    $titular = $_POST['titular'];
    setcookie("galleta", $titular, time()+86400*365);
}
else if(isset($_COOKIE["galleta"])){
    $titular = $_COOKIE["galleta"];
}
else{
    $titular = "NOTICIA POLÍTICA - NOTICIA ECONÓMICA - NOTICIA DEPORTIVA";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 4</title>
</head>
<body>
    <h1><?php echo $titular ?></h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <br />
        Que titular desea que tenga la página?
        <br />
        <input type="radio" name="titular" value="Noticia política">Noticia política
        <br /> 
        <input type="radio" name="titular" value="Noticia económica">Noticia económica
        <br /> 
        <input type="radio" name="titular" value="Noticia deportiva">Noticia deportiva
        <br />
        <input type="submit" value="Enviar"> 
    </form>
    <a href="borrarCookie.php"><strong>Borrar Cookie</strong></a>
</body>
</html>