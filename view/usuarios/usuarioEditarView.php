<div class="breadcrumb">
    <a href="?c=Usuario">Usuario</a>->
    <span class="activo"><?php echo $usuario->getUsuario_id() != null ? $persona->getNombre() : 'Nuevo Registro'; ?></span>
</div>
<form id="frm-alumno" action="?c=usuario&a=guardar" method="post" enctype="multipart/form-data">
    <label type="hidden" value="<?php echo $usuario->getUsuario_id(); ?>"/>
    
    <div class="form-group">
        <label>Usuario</label>
        <input type="text" name="idUsuario" value="<?php echo $usuario->getUsuario_id(); ?>" class="form-control" placeholder="Usuario"/>
    </div>
    <div class="form-group">
        <label>Persona_id</label>
        <input type="text" name="persona_id" value="<?php echo $usuario->getPersona_id(); ?>" class="form-control" placeholder="Usuario"/>
    </div>
    <div class="form-group">
        <label>Clave</label>
        <input type="text" name="claveUsuario" value="<?php echo $usuario->getClave(); ?>" class="form-control" placeholder="Ingrese su clave" />
    </div>
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombreUsuario" value="<?php echo $persona->getNombre(); ?>" class="form-control" placeholder="Ingrese su nombre" />
    </div>

    <div class="form-group">
        <label>Apellido</label>
        <input type="text" name="apellidoUsuario" value="<?php echo $persona->getApellido(); ?>" class="form-control" placeholder="Ingrese su apellido" />
    </div>

    <div class="form-group">
        <label>Cedula</label>
        <input type="text" name="cedulaUsuario" value="<?php echo $persona->getCedula(); ?>" class="form-control" placeholder="Ingrese su cedula" />
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="correo" value="<?php echo $persona->getEmail(); ?>" class="form-control" placeholder="Ingrese su email" />
    </div>
    <div class="form-group">
        <label>Genero</label>
        <label type="text"  value="<?php echo $persona->getGenero(); ?>"></label>
        <label>Genero</label>
        <select name="genero" class="form-control" placeholder="Ingrese su genero">
            <option value="masculino" >Masculino</option>
            <option value="femenino" >Femenino</option>
        </select>
    </div>
    <div class="form-group">
        <label>Fecha de nacimiento</label>
        <input type="text" name="fechaNacimiento" value="<?php echo $persona->getFecha_nacimiento(); ?>" class="form-control" placeholder="Ingrese su fecha de nacimiento" />
    </div>
    
    <div class="text-right">
        <input type="submit" value="Guardar">
    </div>
</form>