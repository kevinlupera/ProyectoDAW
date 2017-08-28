<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Anexsoft</title>
        <link rel="stylesheet" href="assets/estilo.css" />
        <meta charset="utf-8" />
        <link rel="stylesheet" href="assets/estilos2.css"/> 
        <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <script src="funciones/funciones.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body class="container-fluid">
       <div>
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
               
               <div class="barra-navegacion" style="padding-left: 20px;">
                    <?php
                    if(isset($_SESSION['usuario']) && $_SESSION['tipo']==4){
                        echo '<a id="inicio" href="index.php?c=productos&a=listarProductos" class="btn btn-primary"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Inicio</a>';
                        //<a id="login" href="index.php?c=login&a=salir" class="btn btn-warning"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;<?php if(isset($_SESSION['usuario'])){echo "Salir";}else{ echo "Login";}</a>
                        if(isset($_SESSION['usuario'])){
                            echo '<a id="login" href="index.php?c=login&a=salir" class="btn btn-warning"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Salir</a>';
                        }else{ 
                            echo '<a id="login" href="index.php?c=login&a=salir" class="btn btn-warning"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Login</a>';
                        }
                        echo '<a id="cesta" href="index.php?c=cesta&a=getOrdenxUser" class="btn btn-primary"><i class="fa fa-cart-plus" aria-hidden="true"></i>&nbsp;Cesta</a>';
                        echo '<a id="ventas" href="index.php?c=productos&a=listarProductos" class="btn btn-primary"><i class="fa fa-cubes" aria-hidden="true"></i>&nbsp;Productos</a>';
                        echo '<a id="reporte" href="index.php?c=reporte&a=obtenerReporte" class="btn btn-primary"><i class="fa fa-cubes" aria-hidden="true"></i>&nbsp;Reporte</a>';
                        echo '<a id="facturacion" href="index.php?c=facturas&a=listarFacturas" class="btn btn-primary"><i class="fa fa-print" aria-hidden="true"></i>&nbsp;Facturacion</a>';
                        echo '<a id="panel" href="index.php?c=usuario&a=consultar" class="btn btn-primary"><i class="fa fa-line-chart" aria-hidden="true"></i>&nbsp;Panel usuarios</a>';
                        echo '<a id="perfil" href="index.php?c=usuario&a=buscar" class="btn btn-primary"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;Perfil</a>';
                    }elseif(isset($_SESSION['usuario']) && $_SESSION['tipo']==2){
                        echo '<a id="inicio" href="index.php?c=productos&a=listarProductos" class="btn btn-primary"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Inicio</a>';
                        if(isset($_SESSION['usuario'])){
                            echo '<a id="login" href="index.php?c=login&a=salir" class="btn btn-warning"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Salir</a>';
                        }else{ 
                            echo '<a id="login" href="index.php?c=login&a=salir" class="btn btn-warning"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Login</a>';
                        }
                        echo '<a id="facturacion" href="index.php?c=facturas&a=listarFacturas" class="btn btn-primary"><i class="fa fa-print" aria-hidden="true"></i>&nbsp;Facturacion</a>';
                        echo '<a id="cesta" href="index.php?c=cesta&a=getOrdenxUser" class="btn btn-primary"><i class="fa fa-cart-plus" aria-hidden="true"></i>&nbsp;Cesta</a>';
                        echo '<a id="ventas" href="index.php?c=productos&a=listarProductos" class="btn btn-primary"><i class="fa fa-cubes" aria-hidden="true"></i>&nbsp;Productos</a>';
                        echo '<a id="perfil" href="index.php?c=usuario&a=buscar" class="btn btn-primary"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;Perfil</a>';
                    }
                    elseif(isset($_SESSION['usuario']) && $_SESSION['tipo']==3){
                        echo '<a id="inicio" href="index.php?c=productos&a=listarProductos" class="btn btn-primary"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Inicio</a>';
                        if(isset($_SESSION['usuario'])){
                            echo '<a id="login" href="index.php?c=login&a=salir" class="btn btn-warning"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Salir</a>';
                        }else{ 
                            echo '<a id="login" href="index.php?c=login&a=salir" class="btn btn-warning"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Login</a>';
                        }
                        echo '<a id="reporte" href="index.php?c=reporte&a=obtenerReporte" class="btn btn-primary"><i class="fa fa-cubes" aria-hidden="true"></i>&nbsp;Reporte</a>';
                        echo '<a id="cesta" href="index.php?c=cesta&a=getOrdenxUser" class="btn btn-primary"><i class="fa fa-cart-plus" aria-hidden="true"></i>&nbsp;Cesta</a>';
                        echo '<a id="ventas" href="index.php?c=productos&a=listarProductos" class="btn btn-primary"><i class="fa fa-cubes" aria-hidden="true"></i>&nbsp;Productos</a>';
                        echo '<a id="perfil" href="index.php?c=usuario&a=buscar" class="btn btn-primary"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;Perfil</a>';                        
                    }
                    else{
                        echo '<a id="inicio" href="index.php?c=productos&a=listarProductos" class="btn btn-primary"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Inicio</a>';
                        if(isset($_SESSION['usuario'])){
                            echo '<a id="login" href="index.php?c=login&a=salir" class="btn btn-warning"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Salir</a>';
                        }else{ 
                            echo '<a id="login" href="index.php?c=login&a=salir" class="btn btn-warning"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Login</a>';
                        }
                        echo '<a id="cesta" href="index.php?c=cesta&a=getOrdenxUser" class="btn btn-primary"><i class="fa fa-cart-plus" aria-hidden="true"></i>&nbsp;Cesta</a>';
                        echo '<a id="ventas" href="index.php?c=productos&a=listarProductos" class="btn btn-primary"><i class="fa fa-cubes" aria-hidden="true"></i>&nbsp;Productos</a>';
                        echo '<a id="perfil" href="index.php?c=usuario&a=buscar" class="btn btn-primary"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;Perfil</a>';                            
                    }
                    ?>
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

