<?php
    $destino = "elias281205@gmail.com";
    $asunto = "Correo de prueba";
    $mensaje = ' 
    <html>
    <head>
        <title>Envio de mail servidor</title>
    </head>
    <body>
        <h1>Hola!</h1>
        <p>Esto es una prueba!</p>
    </body>
    </html>
    ';

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

    mail($destino,$asunto,$mensaje,$headers);
?>