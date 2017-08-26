<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Anexsoft</title>
        <link rel="stylesheet" href="assets/estilo.css" />
        <meta charset="utf-8" />
        <link rel="stylesheet" href="assets/estilos2.css"/> 
        <script src="funciones/funciones.js" type="text/javascript"></script>
    </head>
    <body>
       <div class="container">
           <header>
                <div class="cabecera">
                    <div class="logo">
                        </br>
                        <h1 class="logo"><b>ALLBUY</b></h1>
                        <img id="logo" src="imagenes/logo.png" alt="Logo"/> 
                    </div>
                </div>
            </header>
           <nav>
               
                <div class="barra-navegacion">
                    <div class="desplegar">
                    <button class="btDesplegable"><i class="fa fa-bars" aria-hidden="true"></i>&nbsp;Categorias</button>
                    <div class="contenDesple">
                    <a href="#">BOARDS</a>
                    <a href="#">SHIELDS</a>
                    <a href="#">SENSORS</a>
                  
                    </div>
                    </div>
                    <a id="inicio" href="index.php?c=productos&a=listarProductos" class="item"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Inicio</a>
                    <a id="login" href="index.php?c=login&a=salir" class="item"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;<?php if(isset($_SESSION['usuario'])){echo "Salir";}else{ echo "Login";}?></a>
                    <a id="cesta" href="index.php?c=cesta&a=getOrdenxUser" class="item"><i class="fa fa-cart-plus" aria-hidden="true"></i>&nbsp;Cesta</a>
                    <a id="ventas" href="index.php?c=productos&a=listarProductos" class="item"><i class="fa fa-cubes" aria-hidden="true"></i>&nbsp;Productos</a>
                    <a id="facturacion" href="index.php?c=facturas&a=listarFacturas" class="item"><i class="fa fa-print" aria-hidden="true"></i>&nbsp;Facturacion</a>
                    <a id="panel" href="index.php?c=usuario&a=consultar" class="item"><i class="fa fa-line-chart" aria-hidden="true"></i>&nbsp;Panel usuarios</a>
                    <a id="perfil" href="index.php?c=usuario&a=buscar" class="item"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;Perfil</a>
                    <strong style=" float: right; color: white; margin-right: 10px;">
                    <?php if(isset($_SESSION['usuario'])){ echo "Bienvenido ".strtoupper($_SESSION['usuario']);                    
                    } 
                        else{
                            if(isset($_COOKIE['cook'])){
                                echo "Bienvenido de vuelta ".strtoupper($_COOKIE['cook']);
                            }
                        }
?>
                    </strong>
                </div>
           
           </nav>

