<?php

    $ganancia = $_POST['precio'] - $_POST['costo'];
    $categoria=$_POST['categoria'];
    if (isset($_FILES['foto']['name'])) {
        $tipoArchivo = $_FILES['foto']['type'];
        $permitido=array("image/png","image/jpeg");
        if( in_array($tipoArchivo,$permitido) ==false ){
            die("Archivo no permitido");
            }
        $nombreArchivo = $_FILES['foto']['name'];
        $tamanoArchivo = $_FILES['foto']['size'];
        $imagenSubida = fopen($_FILES['foto']['tmp_name'], 'r');
        $binariosImagen = fread($imagenSubida, $tamanoArchivo);
        $estado = 1;
        //include_once "db_empresa.php";
        
        //CONECTO LA BASE DE DATOS Y SUBO LOS DATOS
        include "conexion.php";
        $binariosImagen = mysqli_escape_string($conexion, $binariosImagen);
        $query = "INSERT INTO productos (nombre,precio,imagen,tipo,cantidad,talle,ganancia,categoria,estado) values ('" . $_POST['nombre'] . "','" . $_POST['precio'] . "','" . $binariosImagen . "','" . $tipoArchivo . "','" . $_POST['cantidad'] . "','" . $_POST['talle'] . "','" . $ganancia . "','" . $categoria . "','" . $estado . "');";
        $res = mysqli_query($conexion, $query);
        $talle = $_POST['talle'];
        header("Location:../views/talle.php?categoria=$categoria&talle=$talle");
        }
    

?>