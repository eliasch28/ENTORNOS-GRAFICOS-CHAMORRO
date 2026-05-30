<?php
session_start();
if (isset($_SESSION['nombreEncontrado'])){
    echo "Bienvenido al sitio exclusivo señor/a " .$_SESSION['nombreEncontrado'];
}
else{
    echo "Usted no tiene acceso a visualizar esta pagina web";
}
?>