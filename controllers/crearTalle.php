<?php

//RECIBO LOS DATOS DESDE EL FORMULARIO

$categoria = $_POST['categoria'];
$talle = $_POST['talle'];

//TRAIGO LA CONEXION DE LA BASE DE DATOS

include_once "conexion.php";

//REALIZO LA QUERY PARA INSERTAR DATOS EN LA BASE DE DATOS

$query = "INSERT INTO talles (categoria,talle) values 
('" . $categoria . "','" . $talle . "');";
$res = mysqli_query($conexion, $query);

//REDIRECCIONO

header("Location:../views/categoria.php?categoria=" . $categoria);

?>