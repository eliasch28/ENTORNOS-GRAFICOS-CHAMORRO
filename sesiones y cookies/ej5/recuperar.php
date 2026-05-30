<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar</title>
</head>
<body>
    <h1>Datos recuperados de la sesión:</h1>
    <br />
    <?php
    if ((isset($_SESSION['nombreUsuario'])) && (isset($_SESSION['claveUsuario']))) {
        echo "Nombre de usuario: " . $_SESSION['nombreUsuario'] . "<br />";
        echo "Clave recuperada: " . $_SESSION['claveUsuario'] . "<br />";
    } 
    else {
        echo "No hay datos en la sesión.";
    }
    ?>
    <br />
    <a href="ej5.html"><strong>Volver al formulario inicial</strong></a>
</body>
</html>