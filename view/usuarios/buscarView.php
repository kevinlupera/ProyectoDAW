<div class=contenedor>
    <div class=contenedorUsuario>
        <h1>Buscar Usuario</h1>
        <form method="post" action="index.php?c=usuario&a=buscarPersona">
            <input style="align:center;" id="mysearch" name="cedulaBuscada" type="search" placeholder="Cédula o RUC.." maxlength="10" 
                   onkeypress="validaSoloNumeros()" minlength="10" required/>
            <input type="submit" value="Buscar" name="botonBuscar" style="width: 10%;">
        </form>
    </div>
</div>