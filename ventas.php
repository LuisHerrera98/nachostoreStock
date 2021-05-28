

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Registro Ventas</title>
        <link rel="icon" href="imagenes/corona-recorte.png">
    
        <link rel="stylesheet" href="stylesheets/estilosProductos.css">
    
        <!-- Iconos -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"> 
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Raleway:500,600&display=swap" rel="stylesheet">
            
        <!--Materialize-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        
        <!-- CSS Estilos de Carrusel -->
        <link rel="stylesheet" href="stylesheets/carrusel.css">
        
        <!-- CSS Estilos -->
        <link rel="stylesheet" href="stylesheets/style.css">
        
        <!--TIPOGRAFIA GOOGLE FONTS-->
    
        <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
        
        <link href="https://fonts.googleapis.com/css2?family=Syne+Mono&display=swap" rel="stylesheet">
    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
        
        <link rel="stylesheet" href="stylesheets/estilosHeader.css">
        
        <script src="javascripts/jquery.min.js"></script>
    
        
        <script src="https://unpkg.com/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"></script>

        <link rel="stylesheet" href="stylesheets/styleTalles.css">

        <link rel="stylesheet" href="stylesheets/ventas.css">

    </head>
<body>
    <header class="header" id="header" >
        <div class="container2 logo-nav-container">
            <div class="icon-busq" style="width:250px; position:relative;">
                <a href="index.php"  class="logo"><img src="imagenes/corona.jpg" alt=""></a>
               <div style="position:absolute; left:60px;">
                <h1 style="margin:0;">Nacho Store Ventas</h1>
               </div>
            </div>
            <div id="" class="navegacion">
            <span class="menu-icon"><a href="#"><p class="palabraMenu"><i class="fas fa-home"></i>Menu</p><i class=" fas fa-bars"></i></a></span>
            
            <ul class="menuNavegacion" style="margin-top:5px;">
                <li><a href="ventas.php" style="font-size:16px; padding:1px;">VENTAS</a></li>
                    <li><a href="views/categoria.php?categoria=buzos" style="font-size:16px; padding:1px;">BUZOS</a></li>
                    <li><a href="views/categoria.php?categoria=sweaters" style="font-size:16px;padding:1px;">SWEATERS</a></li>
                    <li><a href="views/categoria.php?categoria=camperas" style="font-size:16px;padding:1px;">CAMPERAS</a></li>
                    <li><a href="views/categoria.php?categoria=parkas" style="font-size:16px;padding:1px;">PARKAS</a></li>
                    <li><a href="views/categoria.php?categoria=remeras" style="font-size:16px;padding:1px;">REMERAS</a></li>
                    <li><a href="views/categoria.php?categoria=jeans" style="font-size:16px;padding:1px;">JEANS</a></li>
                    <li><a href="views/categoria.php?categoria=joggers" style="font-size:16px;padding:1px;">JOGGERS</a></li>
                    <li><a href="views/categoria.php?categoria=chinos" style="font-size:16px;padding:1px;">CHINOS/VESTIR</a></li>
                    <li><a href="views/categoria.php?categoria=beisbol" style="font-size:16px;padding:1px;">CAMISETAS/BEISBOL</a></li>
                    <li><a href="views/categoria.php?categoria=camisas" style="font-size:16px;padding:1px;">CAMISAS</a></li>
                    <li><a href="views/categoria.php?categoria=zapatillas" style="font-size:16px;padding:1px;">ZAPATILLAS</a></li>
                    <li><a href="views/categoria.php?categoria=musculosas" style="font-size:16px;padding:1px;">MUSCULOSAS</a></li>
                    <li><a href="views/categoria.php?categoria=joggins" style="font-size:16px;padding:1px;">JOGGINS</a></li>
                </ul>
            </div>
    
        </div>
    
    </header>
    <header class="header-compu" id="heade">
    <div class="menuSuperior">
        <div class="logo-nombre">
            <img src="imagenes/corona.jpg" alt="">
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
    <main style="padding-top:105px;">
    </main>
   
    


    <?php
                       include_once "controllers/conexion.php";
                      
                        $query = "SELECT id,precio,fecha FROM ventas ORDER by id desc";
                        $res = mysqli_query($conexion, $query);
                        $fecha="";
                        while ($row = mysqli_fetch_assoc($res)){
                            $fechaMandar = $row['fecha'];
                            
                            if($fecha != $row['fecha']){
                                $fecha = $row['fecha']; 
                                echo "<a href='ventaVista.php?fecha=$fechaMandar'><h1 style='margin:0;color:#3a40ec;margin-bottom:7px;margin-top:7px;text-align:center;background-color: burlywood;border-radius: 5px;
                                width: 90%;
                                margin-left: 5%;'>$fecha</h1></a>";
                            }
                            
                            
                        }
                        ?> 
    
    <a href="https://wa.link/5jzkyo" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>

    <script src="javascripts/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script src="javascripts/scripts.js"></script>

    <script src="javascripts/scriptCarrusel.js"></script>

    <script src="javascripts/headroom.min.js"></script>

    <script src="javascripts/menu.js"></script>

    <script src="javascripts/masonry.js"></script>

</body>
</html>