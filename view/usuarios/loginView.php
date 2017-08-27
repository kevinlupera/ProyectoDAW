
        <div class="container"> 
             <div class="panel panel-default">
            <form method="post" action="?c=login&a=iniciar" enctype="multipart/form-data">
                <div class="form-group">
                <label for="usuario">
                    Usuario:
                </label>
                <input type="text" class="form-control" name="usuario" placeholder="Usuario" required/>
                </br>
                <label for="clave">
                    Clave:
                </label>
                <input type="password" class="form-control" name="clave" placeholder="Clave" required/>
                </br>
                </div>
                <input type="submit" class="btn btn-success" value="Enviar"/>
            </form> 
            
                <div class="panel-body">
                <a class="btn btn-info" href="?c=usuario&a=registrar">Registrar</a>
                </div>
            
            </div>
        </div>
       


