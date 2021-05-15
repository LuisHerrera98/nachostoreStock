<?php
    $estado = 1;
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
        //include_once "db_empresa.php";
        
        //CONECTO LA BASE DE DATOS Y SUBO LOS DATOS
        include "conexion.php";
        $binariosImagen = mysqli_escape_string($conexion, $binariosImagen);

        // AGREGO EL MISMO PRODUCTO EN LOS TALLES DONDE INGRESARON UN VALOR

        $querytalles = "SELECT talle FROM talles WHERE categoria='$categoria';";
        $restalles = mysqli_query($conexion, $querytalles);
        while ($row = mysqli_fetch_assoc($restalles)) {
            if($_POST[$row['talle']]){

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
        
        
                //CONECTO LA BASE DE DATOS Y SUBO LOS DATOS
                include "conexion.php";
                $binariosImagen = mysqli_escape_string($conexion, $binariosImagen);
                $query = "INSERT INTO productos (nombre,precio,imagen,tipo,cantidad,talle,ganancia,categoria,estado) values ('" . $_POST['nombre'] . "','" . $_POST['precio'] . "','" . $binariosImagen . "','" . $tipoArchivo . "','" . $_POST[$row['talle']] . "','" . $row['talle'] . "','" . $ganancia . "','" . $categoria . "','" . $estado . "');";
                $res = mysqli_query($conexion, $query);
                
                header("Location:../index.php");
        }
            }
            
        
        }
        
    }
    

?>