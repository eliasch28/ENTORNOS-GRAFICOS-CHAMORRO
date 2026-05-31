<?php
session_start();
unset($_SESSION['carro']);
header('Location: vercarro.php?' . SID);
?>