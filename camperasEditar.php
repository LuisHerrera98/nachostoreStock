
<?php
$id=$_POST['id'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$cantidad=$_POST['cantidad'];
$costo=$_POST['costo'];
$talle=$_POST['talle'];


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Editar Campera</title>


    <!-- Iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"> 
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Raleway:500,600&display=swap" rel="stylesheet">
        
    <!--Materialize-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    
    <!-- CSS Estilos de Carrusel -->
    <link rel="stylesheet" href="carrusel.css">
    
    <!-- CSS Estilos -->
    <link rel="stylesheet" href="stylesheets/style.css">
    
    <!--TIPOGRAFIA GOOGLE FONTS--> 
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">

    <!--CSS DEL REGISTRO PERRIS-->
    <link rel="stylesheet" href="stylesheets/styleRegistro.css">

     <!--CSS DEL EFECTO DEL HEADER-->
     <link rel="stylesheet" href="stylesheets/estilosHeader.css">

     <!--CSS DE LOS INPUT PARA CARGAR IMAGENES-->
     <link rel="stylesheet" href="stylesheets/inputFile.css">
     
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <main>
        <div class="logoSuperior" style="padding-top:12px;">
            <a href="/" class="logo-centro">
                <img src="imagenes/corona-recorte.png" alt="">
                <h1 class="nombrePrincipal">Nacho Store</h1>
            </a>
        </div>
    </main>
    <h1 style="margin-top: 12px;margin-bottom:5px;text-align: center;">EDITAR CAMPERA</h1>
    <form action="camperasGuardar.php" method="POST" enctype="multipart/form-data" class="formularioPerris">

        <input type="hidden" name="id" id="id" class="input-crear" value="<?php echo $id ?>">
        <input type="hidden" name="talle" id="id" class="input-crear" value="<?php echo $talle ?>">

        <label for="nombre">Ingrese el nombre</label>
        <input type="text" name="nombre" id="nombre" class="input-crear" value="<?php echo $nombre ?>">

        <br id="br-nombre">
        <label for="nombre">Ingrese el costo</label>
        <input type="text" name="costo" id="costo" class="input-crear" value="<?php echo $costo ?>">
        
        <br id="br-nombre">
        <label for="nombre">Ingrese el precio</label>
        <input type="text" name="precio" id="precio" class="input-crear" value="<?php echo $precio ?>" >

        <br id="br-nombre">
        <label for="nombre">Ingrese la cantidad</label>
        <input type="text" name="cantidad" id="precio" class="input-crear" value="<?php echo $cantidad ?>">
        
        <hr>
        <button type="submit" style="margin-top:5px;" name="guardar">Guardar</button>
    </form>


    <script src="javascripts/jquery.min.js"></script>

    <script src="javascripts/scriptCarrusel.js"></script>

    <script src="javascripts/scripts.js"></script>

    <script src="javascripts/headroom.min.js"></script>

    <script src="javascripts/jquery.min.js"></script>

    <script src="javascripts/menu.js"></script>

    <script src="javascripts/cargarImagenes.js"></script>

    <script src="javascripts/validacionVistaCrearProducto.js"></script>
</body>
</html>

