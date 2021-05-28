<?php
$categoria = $_GET['categoria'];
$talle = $_GET['talle'];
?>

<?php
    date_default_timezone_set('UTC');
    setlocale (LC_TIME, "es_RA");
    $hora = date("l d \of-F-Y");
    if($hora){
        $hora = str_replace("Monday","Lunes",$hora);
        $hora = str_replace("-"," ",$hora);
        $hora = str_replace("of","de",$hora);
    }
    if($hora){
        $hora = str_replace("Tuesday","Martes",$hora);
    }
    if($hora){
        $hora = str_replace("Wednesday","Miercoles",$hora);
    }
    if($hora){
        $hora = str_replace("Thursday","Jueves",$hora);
    }
    if($hora){
        $hora = str_replace("Friday","viernes",$hora);
    }
    if($hora){
        $hora = str_replace("Saturday","Sabado",$hora);
    }
    if($hora){
        $hora = str_replace("Sunday","Domingo",$hora);
    }
    if($hora){
        $hora = str_replace("January","Enero",$hora);
    }
    if($hora){
        $hora = str_replace("February","Febrero",$hora);
    }
    if($hora){
        $hora = str_replace("March","Marzo",$hora);
    }
    if($hora){
        $hora = str_replace("April","Abril",$hora);
    }
    if($hora){
        $hora = str_replace("May","Mayo",$hora);
    }
    if($hora){
        $hora = str_replace("June","Junio",$hora);
    }
    if($hora){
        $hora = str_replace("July","Julio",$hora);
    }
    if($hora){
        $hora = str_replace("August","Agosto",$hora);
    }
    if($hora){
        $hora = str_replace("September","Septiembre",$hora);
    }
    if($hora){
        $hora = str_replace("October","Octubre",$hora);
    }
    if($hora){
        $hora = str_replace("November","Noviembre",$hora);
    }
    if($hora){
        $hora = str_replace("December","Diciembre",$hora);
    }
?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title><?php echo $categoria ?></title>
        <link rel="icon" href="../imagenes/corona-recorte.png">
    
        <link rel="stylesheet" href="../stylesheets/estilosProductos.css">
    
        <!-- Iconos -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"> 
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Raleway:500,600&display=swap" rel="stylesheet">
            
        <!--Materialize-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        
        <!-- CSS Estilos de Carrusel -->
        <link rel="stylesheet" href="../stylesheets/carrusel.css">
        
        <!-- CSS Estilos -->
        <link rel="stylesheet" href="../stylesheets/style.css">
        
        <!--TIPOGRAFIA GOOGLE FONTS-->
    
        <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
        
        <link href="https://fonts.googleapis.com/css2?family=Syne+Mono&display=swap" rel="stylesheet">
    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
        
        <link rel="stylesheet" href="../stylesheets/estilosHeader.css">
        
        <script src="../javascripts/jquery.min.js"></script>
    
        
        <script src="https://unpkg.com/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"></script>

        <link rel="stylesheet" href="../stylesheets/styleTalles.css">
        <script src="javascripts/masonry.js"></script>

    </head>
<body>
    <header class="header" id="header" >
        <div class="container2 logo-nav-container">
            <div class="icon-busq" style="width:250px; position:relative;">
                <a href="../index.php"  class="logo"><img src="../imagenes/corona.jpg" alt=""></a>
               <div style="position:absolute; left:60px;">
                <h1 style="margin:0;">Nacho Store Stock</h1>
               </div>
            </div>
            <div id="" class="navegacion">
            <span class="menu-icon"><a href="#"><p class="palabraMenu"><i class="fas fa-home"></i>Menu</p><i class=" fas fa-bars"></i></a></span>
            
            <ul class="menuNavegacion" style="margin-top:5px;">
                <li><a href="../ventas.php" style="font-size:16px; padding:1px;">VENTAS</a></li>
                    <li><a href="categoria.php?categoria=buzos" style="font-size:16px; padding:1px;">BUZOS</a></li>
                    <li><a href="categoria.php?categoria=sweaters" style="font-size:16px;padding:1px;">SWEATERS</a></li>
                    <li><a href="categoria.php?categoria=camperas" style="font-size:16px;padding:1px;">CAMPERAS</a></li>
                    <li><a href="categoria.php?categoria=parkas" style="font-size:16px;padding:1px;">ABRIGOS/PARKAS</a></li>
                    <li><a href="categoria.php?categoria=remeras" style="font-size:16px;padding:1px;">REMERAS</a></li>
                    <li><a href="categoria.php?categoria=jeans" style="font-size:16px;padding:1px;">JEANS</a></li>
                    <li><a href="categoria.php?categoria=joggers" style="font-size:16px;padding:1px;">JOGGERS</a></li>
                    <li><a href="categoria.php?categoria=chinos" style="font-size:16px;padding:1px;">CHINOS/VESTIR</a></li>
                    <li><a href="categoria.php?categoria=camisas" style="font-size:16px;padding:1px;">CAMISAS</a></li>
                    <li><a href="categoria.php?categoria=zapatillas" style="font-size:16px;padding:1px;">ZAPATILLAS</a></li>
                    <li><a href="categoria.php?categoria=musculosas" style="font-size:16px;padding:1px;">MUSCULOSAS</a></li>
                    <li><a href="categoria.php?categoria=joggins" style="font-size:16px;padding:1px;">JOGGINS</a></li>
                </ul>
            </div>
    
        </div>
    
    </header>
    <header class="header-compu" id="heade">
    <div class="menuSuperior">
        <div class="logo-nombre">
            <img src="../imagenes/corona.jpg" alt="">
            <h6>NachoStore</h6>
        </div>
        <div class="caja-input">
            <input type="text" placeholder="Buscar" >
        </div>
        <div class="menuSuperiorDerecho">
                <a href="registro.html">Crear Cuenta</a>
                <a href="login.html">Iniciar Sesion</a>
    
    </div>
    </div class="navegacionMenuInferior">
         <ul class="listaNavegacion">
            <a href="index.html"><li>Inicio</li></a>
            <a href="productos.html"><li>Productos</li></a>
            <a href="contacto.html"><li>Contacto</li></a>
            <a href="comoComprar.html"><li>Como Comprar</li></a>
             <div class="cajitaDelCarrito">
                 <a href="carrito.html"><i class="fas fa-shopping-cart"></i></a>
            </div>
        </ul>
    <div>
    
    </div>
    </header>
    <main style="padding-top:95px;">
    </main>
    <section>
        <h2 class="productosDestacados" style="margin:0; text-align:center;margin-top:12px; margin-bottom:12px;"><?php echo strtoupper($categoria)?>  <?php echo strtoupper($talle) ?></h2>
    <div style="width:100%; display:flex; justify-content:center">
        <a href="../views/crearProducto.php?talle=<?php echo $talle?>&categoria=<?php echo $categoria?>"><button class="boton-agregar">Agregar</button></a>
    </div>

    <div class="caja-productos">
    <?php
    // include_once "db_empresa.php";
    include_once "../controllers/conexion.php";
    $estado = 1;
    $query = "SELECT * FROM productos WHERE talle='$talle' and categoria='$categoria' and estado='$estado' ORDER by id desc;";
    $res = mysqli_query($conexion, $query);
    while ($row = mysqli_fetch_assoc($res)) {
    ?>
       <article class="caja-producto">
          <div class="figure">  
             <img src="data:<?php echo $row['tipo']; ?>;base64,<?php echo  base64_encode($row['imagen']); ?>">
             <div style="position:absolute; border-radius:50px;color:white;background-color:black; top:2px;left:2px;margin:0; font-size:14px;width:26px;height:26px; display:flex; justify-content:center; align-items:center;"><p style="margin:0; text-align:center; font-family:Arial, Helvetica, sans-serif;"><?php echo $row['cantidad']; ?></p></div>
             <div style="position:absolute; border-radius:50px;color:white;background-color:black; top:2px;right:3px;margin:0; font-size:14px;width:26px;height:26px; display:flex; justify-content:center; align-items:center;"><p style="margin:0; text-align:center; font-family:Arial, Helvetica, sans-serif;">
                <form action="../controllers/aumentar.php" method="post">
                    <input type="text" value="<?php echo $row['id']; ?>" name="id" style="display:none;">
                    <input type="text" value="<?php echo $talle ?>" name="talle" style="display:none;">
                    <input type="hidden" name="cantidad" value="<?php echo $row['cantidad']; ?>">
                    <input type="hidden" name="categoria" value="<?php echo $row['categoria']; ?>">
                    <input type="hidden" name="cantidadFinal" value="<?php echo $row['cantidad']+1; ?>">
                    <button type="submit" style="color:wheat;background-color:black;border:none;border-radius:10px;text-align:center;"><i class="fas fa-plus" style="padding:0;font-size:15px"></i></button>
                </form>
            </div>
            <div style="position:absolute; border-radius:50px;color:white;background-color:trasparent; top:2px;right:42%;margin:0; font-size:14px;width:26px;height:26px; display:flex; justify-content:center; align-items:center;"><p style="margin:0; text-align:center; font-family:Arial, Helvetica, sans-serif;">
                <form action="../controllers/cambio.php" method="post">
                <input type="text" value="<?php echo $row['precio']; ?>" name="precio" style="display:none;">

                    <input type="hidden" value="<?php echo $row['ganancia']?>" name="ganancia">

                    <input type="text" value="<?php echo $row['nombre']; ?>" name="nombre" style="display:none;">

                    <input type="text" value="<?php echo $row['categoria']; ?>" name="categoria" style="display:none;">


                    <input type="datetime" value="<?php echo $hora ?>" name="fecha" style="display:none;">

                    <input type="text" value="<?php echo $row['id']; ?>" name="id" style="display:none;">

                    <input type="text" value="<?php echo $talle ?>" name="talle" style="display:none;">

                    <input type="hidden" name="cantidad" value="<?php echo $row['cantidad']; ?>">

                    <input type="hidden" name="cantidadFinal" value="<?php echo $row['cantidad']-1; ?>">

                    <button type="submit" style="height:20px; font-size:17px; color:white;background-color:#000099; border:none; border-radius:5px;width:100%;"><i class="fas fa-exchange-alt"></i></button>
                </form>
            </div>

            </div>
                <div class="caja-detalle-producto" style="margin-top:0; padding-left:3px; padding-right:3px;">
                    <p class="nombre-producto" name="nombre" style="margin-top:0px; font-size:14px"><?php echo $row['nombre']; ?></p>
                    <hr>
                </div>
                <div style="display:flex;">
                    <h4 class="precio-producto" name="precio" style="margin-left-8px;">$<?php echo $row['precio']; ?></h4>
                </div>
                                    
                <div style="display:flex; justify-content:space-around; width:100%;">
                    <form action="../controllers/borrar.php" method="post" style="width:45%;" enctype="multipart/form-data">

                        <input type="text" value="<?php echo $row['precio']; ?>" name="precio" style="display:none;">

                        <input type="hidden" value="<?php echo $row['ganancia']?>" name="ganancia">

                        <input type="text" value="<?php echo $row['nombre']; ?>" name="nombre" style="display:none;">

                        <input type="text" value="<?php echo $row['categoria']; ?>" name="categoria" style="display:none;">


                        <input type="datetime" value="<?php echo $hora ?>" name="fecha" style="display:none;">

                        <input type="text" value="<?php echo $row['id']; ?>" name="id" style="display:none;">

                        <input type="text" value="<?php echo $talle ?>" name="talle" style="display:none;">

                        <input type="hidden" name="cantidad" value="<?php echo $row['cantidad']; ?>">

                        <input type="hidden" name="cantidadFinal" value="<?php echo $row['cantidad']-1; ?>">

                        <button type="submit" style="height:20px; font-size:15px; color:white;background-color:black; border:none; border-radius:5px;width:100%;">Borrar</button>
                                
                    </form>

                    <form action="editarProducto.php" method="post" style="width:45%;">

                        <input type="hidden" value="<?php echo $row['precio']-$row['ganancia']?>" name="costo">    

                        <input type="text" value="<?php echo $row['categoria']; ?>" name="categoria" style="display:none;"> 

                        <input type="hidden" value="<?php echo $row['id']; ?>" name="id">

                        <input type="hidden" value="<?php echo $talle; ?>" name="talle">

                        <input type="hidden" value="<?php echo $row['nombre']; ?>" name="nombre">

                        <input type="hidden" value="<?php echo $row['precio']; ?>" name="precio">

                        <input type="hidden" value="<?php echo $row['cantidad']; ?>" name="cantidad">

                                        
                        <button type="submit" style="height:20px; font-size:15px;color:white;background-color:black; border:none; border-radius:5px;width:100%; ">Editar</button>

                    </form>
                </div>              
        </article>
                        <?php
                        }
                        ?>     
    </div>  
    </section>
    
    <a href="https://wa.link/5jzkyo" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>

    <script src="../javascripts/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script src="../javascripts/scripts.js"></script>

    

    <script src="../javascripts/headroom.min.js"></script>

    <script src="../javascripts/menu.js"></script>

    <script src="../javascripts/masonry.js"></script>

</body>
</html>