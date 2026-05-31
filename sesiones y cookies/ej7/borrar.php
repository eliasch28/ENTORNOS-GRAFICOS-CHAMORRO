<?php
session_start();
extract($_GET);
unset($_SESSION['carro'][md5($id)]);
header('Location: vercarro.php?' . SID);
?>