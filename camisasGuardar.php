<?php 
include ("cn.php");

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$cantidad=$_POST['cantidad'];
$ganancia=$_POST['precio']-$_POST['costo'];

$actualizar = "UPDATE camisas SET nombre='$nombre', precio='$precio', cantidad='$cantidad', ganancia='$ganancia' WHERE id='$id'";
$resultado=mysqli_query($conexion,$actualizar);

$talle=$_POST['talle'];
header("Location:camisasLista.php?talle=" . $talle);

?>