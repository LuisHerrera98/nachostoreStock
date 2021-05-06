<?php

include_once 'config.php';
include ('cn.php');

$id = $_POST['id'];
$talle = $_POST['talle'];
$cantidad = $_POST['cantidad'];
$cantidadFinal = $_POST['cantidadFinal'];





$actualizar = "UPDATE buzos SET cantidad='$cantidadFinal' WHERE id='$id'";
$resultado=mysqli_query($conexion,$actualizar);

header("Location:buzosLista.php?talle=" . $talle);

