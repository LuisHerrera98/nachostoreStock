<?php

include_once 'config.php';
include ('cn.php');

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$talle = $_POST['talle'];
$fecha = $_POST['fecha'];
$cantidad = $_POST['cantidad'];
$cantidadFinal = $_POST['cantidadFinal'];
$categoria = $_POST['categoria'];
$ganancia = $_POST['ganancia'];

$query = "INSERT INTO ventas (nombre , precio , talle , fecha , idImg , categoria, ganancia) values ('" . $nombre . "','" . $precio . "','" . $talle . "','" . $fecha . "','" . $id . "' ,'" . $categoria . "','" . $ganancia . "');
                            ";
$res = mysqli_query($conexion, $query);
if($cantidad == 1){
    $sql = 'DELETE FROM camperas WHERE id=:id';
    $query = $pdo->prepare($sql);
    $query->execute([
    'id' => $id
]);

header("Location:camperasLista.php?talle=" . $talle);
}else{

    $actualizar = "UPDATE camperas SET cantidad='$cantidadFinal' WHERE id='$id'";
    $resultado=mysqli_query($conexion,$actualizar);

    header("Location:camperasLista.php?talle=" . $talle);
}