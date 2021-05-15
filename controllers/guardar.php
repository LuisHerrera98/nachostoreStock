<?php 
include_once ("conexion.php");

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$cantidad=$_POST['cantidad'];
$ganancia=$_POST['precio']-$_POST['costo'];
$talle=$_POST['talle'];
$categoria=$_POST['categoria'];


$actualizar = "UPDATE productos SET nombre='$nombre', precio='$precio', cantidad='$cantidad' , ganancia='$ganancia' WHERE id='$id'";
$resultado=mysqli_query($conexion,$actualizar);


header("Location:../views/talle.php?categoria=$categoria&talle=$talle");

?>