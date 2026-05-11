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
<?php
    if (!isset($_SESSION["cont"])) { 
        $_SESSION["cont"] = 1; 
    } else { 
        $_SESSION["cont"]++; 
    } 
?>
    <h1>Página de conteo</h1>
    <p>Se ha incrementado el contador.</p>
    <a href="ejercicio4cantvisitas.php">Ver total de páginas visitadas</a>
</body>
</html>