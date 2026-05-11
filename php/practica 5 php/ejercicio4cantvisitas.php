<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <p>Has visitado esta página <?php echo $_SESSION["cont"]; ?> veces.</p>
    <a href="ejercicio4cuenta.php">Volver a la página de conteo</a>
</body>
</html>