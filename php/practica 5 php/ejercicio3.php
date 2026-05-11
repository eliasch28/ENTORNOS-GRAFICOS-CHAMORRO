<?php
    $destino = $_POST['email_amigo'];
    $nomAmigo = $_POST['nombre_amigo'];
    $desde = 'From:' . $_POST['email_propio'];
    $nomPropio = $_POST['nombre_propio'];
    $asunto = "Tu amigo $nomPropio recomienda esta página";
    $texto = "
        Hola $nomAmigo, tu amigo $nomPropio te recomienda esta página web: www.youtube.com
    ";
    $headers = "From: $desde";

    mail($destino, $asunto, $texto, $headers);

    echo "¡Gracias por recomendar nuestro sitio a $nomAmigo!";
?>
