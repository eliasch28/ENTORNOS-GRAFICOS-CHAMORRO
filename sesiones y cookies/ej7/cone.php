<?php
    $link = mysqli_connect("localhost", "root") or die("Error en la base");
    mysqli_select_db($link, "compras");
?>