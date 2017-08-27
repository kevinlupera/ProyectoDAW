
<div class='panel-grou'>
    <div class='panel panel-primary'>
        <div class=usuario id=usuario1>
            <div class="panel-heading">
                <a href=# class=fotoUsuario><img src=imagenes/user-image.png alt=User style=height:100px;></a>
            </div>
            
            <div class="panel-body">
                <span id=nombreUsuario1>NOMBRE: <?php echo $this->persona->getNombre() ?></span><br/>
                <span id=nombreUsuario1>APELLIDO: <?php echo $this->persona->getApellido()?></span><br/>
                <span id=nombreUsuario1>FECHA DE NACIMIENTO: <?php echo $this->persona->getFecha_nacimiento()?></span><br/>
                <span id=nombreUsuario1>EMAIL: <?php echo $this->persona->getEmail() ?></span><br/>
                <span id=nombreUsuario1>GENERO: <?php echo $this->persona->getGenero()?></span><br/>                                                            
            </div>
        </div>
    </div>
    <a class="btn btn-primary" href=index.php?c=usuario&a=buscar>REGRESAR</a>
</div>
 

