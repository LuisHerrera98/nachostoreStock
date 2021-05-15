<?php

include_once "conexion.php";

$id = $_POST['id'];
$talle = $_POST['talle'];
$cantidad = $_POST['cantidad'];
$cantidadFinal = $_POST['cantidadFinal'];
$categoria = $_POST['categoria'];





$actualizar = "UPDATE productos SET cantidad='$cantidadFinal' WHERE id='$id'";
$resultado=mysqli_query($conexion,$actualizar);

header("Location:../views/talle.php?categoria=$categoria&talle=$talle");

?>