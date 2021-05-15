<?php

include_once 'conexion.php';

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
    $estado = 0;
    $cantidadActual = 0;
    $sql = "UPDATE productos SET cantidad='$cantidadActual', estado='$estado' WHERE id='$id'";
    $res2 = mysqli_query($conexion,$sql);

header("Location:../views/talle.php?categoria=$categoria&talle=$talle");
}else{

    $actualizar = "UPDATE productos SET cantidad='$cantidadFinal' WHERE id='$id'";
    $resultado=mysqli_query($conexion,$actualizar);

    header("Location:../views/talle.php?categoria=$categoria&talle=$talle");
}