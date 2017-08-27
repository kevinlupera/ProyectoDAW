<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <span>Buscar Usuario</span>
        </div>
        <form method="post" action="index.php?c=usuario&a=buscarPersona">
            <div class="form-group">
            <input class="form-control" style="align:center;" id="mysearch" name="cedulaBuscada" type="search" placeholder="Cédula o RUC.." maxlength="10" 
                   onkeypress="validaSoloNumeros()" minlength="10" required/>
            </div>
            <div class="form-group">
            <input type="submit"  class="btn btn-success" value="Buscar" name="botonBuscar" style="width: 10%;">
            </div>
        </form>
    </div>
</div>