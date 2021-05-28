<?php
$categoria = $_GET['categoria'];
$talle = $_GET['talle'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title><?php echo $categoria?></title>
        <link rel="icon" href="../imagenes/corona-recorte.png">

        <script src="../javascripts/masonry.js"></script>
    
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

    </head>
<body>
    <header class="header" id="header" >
        <div class="container2 logo-nav-container">
            <div class="icon-busq" style="width:250px; position:relative;">
                <a href="../indexPublico.php"  class="logo"><img src="../imagenes/corona.jpg" alt=""></a>
               <div style="position:absolute; left:60px;">
                <h1 style="margin:0;">Nacho Store Stock</h1>
               </div>
            </div>
            <div id="" class="navegacion">
            <span class="menu-icon"><a href="#"><p class="palabraMenu"><i class="fas fa-home"></i>Menu</p><i class=" fas fa-bars"></i></a></span>
            
            <ul class="menuNavegacion" style="margin-top:5px;">
                    <li><a href="categoriaPublico.php?categoria=buzos" style="font-size:16px; padding:1px;">BUZOS</a></li>
                    <li><a href="categoriaPublico.php?categoria=sweaters" style="font-size:16px;padding:1px;">SWEATERS</a></li>
                    <li><a href="categoriaPublico.php?categoria=camperas" style="font-size:16px;padding:1px;">CAMPERAS</a></li>
                    <li><a href="categoriaPublico.php?categoria=parkas" style="font-size:16px;padding:1px;">ABRIGOS/PARKAS</a></li>
                    <li><a href="categoriaPublico.php?categoria=remeras" style="font-size:16px;padding:1px;">REMERAS</a></li>
                    <li><a href="categoriaPublico.php?categoria=jeans" style="font-size:16px;padding:1px;">JEANS</a></li>
                    <li><a href="categoriaPublico.php?categoria=joggers" style="font-size:16px;padding:1px;">JOGGERS</a></li>
                    <li><a href="categoriaPublico.php?categoria=chinos" style="font-size:16px;padding:1px;">CHINOS/VESTIR</a></li>
                    <li><a href="categoriaPublico.php?categoria=beisbol" style="font-size:16px;padding:1px;">CAMISETAS/BEISBOL</a></li>
                    <li><a href="categoriaPublico.php?categoria=camisas" style="font-size:16px;padding:1px;">CAMISAS</a></li>
                    <li><a href="categoriaPublico.php?categoria=zapatillas" style="font-size:16px;padding:1px;">ZAPATILLAS</a></li>
                    <li><a href="categoriaPublico.php?categoria=musculosas" style="font-size:16px;padding:1px;">MUSCULOSAS</a></li>
                    <li><a href="categoriaPublico.php?categoria=joggins" style="font-size:16px;padding:1px;">JOGGINS</a></li>
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
        <h2 class="productosDestacados" style="margin:0; text-align:center;margin-top:12px; margin-bottom:12px;font-size:20px"><?php echo strtoupper($categoria)?> TALLE  <?php echo strtoupper($talle) ?></h2>
    

    <div class="caja-productos">
    <?php
    // include_once "db_empresa.php";
    include_once "../controllers/conexion.php";
    $estado = 1;
    $query = "SELECT * FROM productos WHERE talle='$talle' and categoria='$categoria' and estado='$estado' ORDER by id desc;";
    $res = mysqli_query($conexion, $query);
    while ($row = mysqli_fetch_assoc($res)) {
    ?>
       <a href="producto.php?id=<?php echo $row['id'] ?>">
        <article class="caja-producto">
          <div class="figure">  
             <img src="data:<?php echo $row['tipo']; ?>;base64,<?php echo  base64_encode($row['imagen']); ?>">

            </div>
                <div class="caja-detalle-producto" style="margin-top:0; padding-left:3px; padding-right:3px;">
                    <p class="nombre-producto" name="nombre" style="margin-top:0px; font-size:14px"><?php echo $row['nombre']; ?></p>
                    <hr>
                </div>
                <div style="display:flex;">
                    <h4 class="precio-producto" name="precio" style="margin-left-8px;">$<?php echo $row['precio']; ?></h4>
                </div>
                                             
            </article>
       </a>
       
                        <?php
                        }
                        ?>     
    </div>  
    </section>
    
    <a href="https://api.whatsapp.com/send?phone=542216416297&text=hola%20tengo%20una%20consulta%20de%20un%20producto" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>

    <script src="../javascripts/masonry.js"></script>

    <script src="../javascripts/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script src="../javascripts/scripts.js"></script>

    

    <script src="../javascripts/headroom.min.js"></script>

    <script src="../javascripts/menu.js"></script>

    

</body>
</html>