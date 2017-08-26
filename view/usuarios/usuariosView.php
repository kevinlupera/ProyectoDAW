<h1>Usuarios</h1>
<div>
    <a href="index.php?c=usuario&a=registrar">Nuevo usuario</a>
</div>

<table>
    <thead>
        <tr>
            <th style="width:180px;">Nombre</th>
            <th>Apellido</th>
            <th>Cedula</th>
            <th style="width:120px;">Fecha_nacimiento</th>
            <th style="width:120px;">Email</th>
            <th style="width:60px;">Genero</th>
            <th style="width:60px;"></th>
            <th style="width:60px;"></th>
        </tr>
    </thead>
    <tbody>
    <?php 
    $r = new Persona();
    foreach($this->persona as  $r): ?>
        <tr>
            <td><?php echo $r->getNombre(); ?></td>
            <td><?php echo $r->getApellido(); ?></td>
            <td><?php echo $r->getCedula(); ?></td>
            <td><?php echo $r->getFecha_nacimiento() ; ?></td>
            <td><?php echo $r->getEmail(); ?></td> 
            <td><?php echo $r->getGenero(); ?></td> 
            <td>
                <a href="?c=usuario&a=Crud&id=<?php echo $r->getPersona_id(); ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=usuario&a=Eliminar&id=<?php echo $r->getPersona_id(); ?>">
                    Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
