
<div class=contenedor>
    <div class=contenedorUsuario>
        <div class=usuario id=usuario1>
            <a href=# class=fotoUsuario><img src=imagenes/user-image.png alt=User style=height:100px;></a>
            <div class=infoUsuario>
                <span id=nombreUsuario1>".<?php echo $this->persona->getNombre() ?>."</span><br/>
                <span id=nombreUsuario1>".<?php echo $this->persona->getApellido()?>."</span><br/>
                <span id=nombreUsuario1>".<?php echo $this->persona->getFecha_nacimiento()?>."</span><br/>
                <span id=nombreUsuario1>".<?php echo $this->persona->getEmail() ?>."</span><br/>
                <span id=nombreUsuario1>".<?php echo $this->persona->getGenero()?>."</span><br/>                                                            
            </div>
        </div>
    </div>
    <a href=index.php?c=usuario&a=buscar>REGRESAR</a>";
</div>
 

