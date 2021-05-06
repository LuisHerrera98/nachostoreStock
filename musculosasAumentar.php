<?php

include_once 'config.php';
include ('cn.php');

$id = $_POST['id'];
$talle = $_POST['talle'];
$cantidad = $_POST['cantidad'];
$cantidadFinal = $_POST['cantidadFinal'];

$actualizar = "UPDATE musculosas SET cantidad='$cantidadFinal' WHERE id='$id'";
$resultado=mysqli_query($conexion,$actualizar);

header("Location:musculosasLista.php?talle=" . $talle);