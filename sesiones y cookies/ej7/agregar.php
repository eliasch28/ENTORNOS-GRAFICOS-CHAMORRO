<?php
session_start();
include("cone.php");

//trasnforma lo de las ? en variables, y así aparece $id
extract($_REQUEST);

if(!isset($cantidad)){ 
    $cantidad = 1; 
}

$consulta = "SELECT * FROM catalogo WHERE id = '$id'";
$resultado = mysqli_query($link, $consulta);
$arreglo = mysqli_fetch_array($resultado);

if(isset($_SESSION['carro'])) {
    $carro = $_SESSION['carro'];
}else {
    $carro = array();
}
//dentro del array del carro tengo otro array que tiene los datos de cada
//producto en sus posiciones, y para cada id siempre va la misma posición
//utilizando el md5[$id] pues siempre devuelve el mismo hash si el id es igual
if(isset($carro[md5($id)])){
    $carro[md5($id)]['cantidad'] += $cantidad;
} else {
    $carro[md5($id)] = array(
        'identificador' => md5($id),
        'cantidad' => $cantidad,
        'producto' => $arreglo['producto'],
        'precio' => $arreglo['precio'],
        'id' => $id
    );
}

$_SESSION['carro'] = $carro;

header("Location: catalogo.php?".SID);
exit;
?>