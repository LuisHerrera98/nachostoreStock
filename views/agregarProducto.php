
<?php 

$categoria = $_GET['categoria'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Agregar buzo</title>


    <!-- Iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"> 
    
   
        
    <!--Materialize-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    
    
    <!-- CSS Estilos -->
    <link rel="stylesheet" href="../stylesheets/style.css">

    <!--CSS DEL REGISTRO PERRIS-->
    <link rel="stylesheet" href="../stylesheets/styleRegistro.css">

     <!--CSS DE LOS INPUT PARA CARGAR IMAGENES-->
     <link rel="stylesheet" href="../stylesheets/inputFile.css">

     <link rel="stylesheet" href="../stylesheets/styleTalles.css">
     
    
</head>
<body>
    <main>
        <div class="logoSuperior" style="padding-top:12px;">
            <a href="/" class="logo-centro">
                <img src="../imagenes/corona-recorte.png" alt="">
                <h1 class="nombrePrincipal">Nacho Store</h1>
            </a>
        </div>
    </main>
    
    <h1 style="margin-top: 12px;margin-bottom:5px;text-align: center;">AGREGAR <?php echo  strtoupper($categoria)?></h1>
    <form action="../controllers/agregarTalles.php" method="POST" enctype="multipart/form-data" class="formularioPerris">
        <label for="nombre">Ingrese el nombre</label>
        <input type="text" name="nombre" id="nombre" class="input-crear">

        <br id="br-nombre">
        <label for="nombre">Ingrese el costo</label>
        <input type="text" name="costo" id="precio" class="input-crear">
        
        <br id="br-nombre">
        <label for="nombre">Ingrese el precio</label>
        <input type="text" name="precio" id="precio" class="input-crear">

        <br id="br-nombre">
        <br>
        <label for="nombre" style="font-weight:bold;">Ingrese cantidades por talle</label>
        <br>
        <?php
        
        include_once "../controllers/conexion.php";
        $categoria = $_GET['categoria'];
        $query = "SELECT talle FROM talles WHERE categoria='$categoria';";
        $res = mysqli_query($conexion, $query);
        while ($row = mysqli_fetch_assoc($res)) {
        ?>
            <div class="inputTalles">
                <label for="">TALLE <?php echo strtoupper($row['talle'])?></label>
                <input type="number" name="<?php echo $row['talle'] ?>">
            </div>
        <?php
        }
        ?>
        

        <input type="hidden" name="categoria" value="<?php echo $categoria?>">
        
        <br id="br-descuento">
        <label for="imagen">Carga la imagen "Principal"</label>
            <div class="botones-input-file" id="primer-button">Subir imagen <i class="fas fa-file-upload"></i>
            <input class="subir-imagen-principal" type="file" name="foto" id="img-principal">
            </div> 
        <hr>    
        <button type="submit" style="margin-top:5px;" name="guardar">Crear Producto</button>
    </form>

    <script src="../javascripts/cargarImagenes.js"></script>

    <script src="../javascripts/validacionVistaCrearProducto.js"></script>
</body>
</html>

