<div class="container">
<h3>Registrate</h3>
<form method="post" action="?c=usuario&a=registrar" onsubmit="return validacionFormularioRegistro()" >
    <div class="form-group">
    <label for="idUsuario">Usuario:</label><br/>
    <input type="text" class="form-control" name="idUsuario" id="campoIdUsuario" onkeypress="validaSoloLetras()" onkeyup="registerLog(this.value)"
           placeholder="Usuario" required/><br/>
    <span id="mensaje"></span><br/>
    <label for="nombreUsuario">Nombre:</label><br/>
    <input type="text"  class="form-control" name="nombreUsuario" id="campoNombreUsuario" onkeypress="validaSoloLetras()"
           placeholder="Nombre" required/><br/>
    <label for="apellidoUsuario">Apellido:</label><br/>
    <input type="text"  class="form-control" name="apellidoUsuario" id="campoApellidoUsuario" onkeypress="validaSoloLetras()"
           placeholder="Apellido" required/><br/>
    <label for="cedulaUsuario">Cedula:</label><br/>
    <input type="text"  class="form-control" name="cedulaUsuario" id="campoCedulaUsuario" onkeypress="validaSoloNumeros()" maxlength="10"
           placeholder="1234567890" required/><br/>
    <label for="correo"> E-mail:</label><br/>
    <input type="email"  class="form-control" name="correo" id="campoEmail" placeholder="email@example.com" required><br/>
    <label for="claveUsuario">Contraseña de usuario:</label><br/>
    <input type="password"  class="form-control" name="claveUsuario" id="campoContrasenia" placeholder="Clave" required><br/>
    <label for="claveUsuario">Confirmar contraseña:</label><br/>
    <input type="password"  class="form-control" name="claveUsuario" id="campoContrasenia2" placeholder="Clave" required><br/>
    <label for="radio">Genero:</label><br/>
    <input type="radio"   name="genero" value="hombre" class="btRadio"><label>Masculino</label><br/>
    <input type="radio"   name="genero" value="mujer" class="btRadio"><label>Femenino</label><br/>
    <input type="radio"   name="genero" value="otro" class="btRadio"><label>Otro</label><br/>
    <label for="fechaNacimiento">Fecha de Nacimiento:</label><br/>
    <input type="date"  class="form-control" name="fechaNacimiento" min="1930-01-01" max="2002-12-31" id="campoFechaNac"
            required><br/>
    </div> 
    <div class="form-group">
    <input type="submit" value="Registrar"  class="btn btn-success" name="botonRegistrar" style="margin-botton: 10px"><br/>
     </div>
    <input type="reset" value="Limpiar" class="btn btn-danger" >
</form>
</div>
<script language="javascript">
    function registerLog(cadena){
        if (cadena.length == 0) {
            document.getElementById("mensaje").innerHTML = "";
            return;
        }else{
            var xhttp = new XMLHttpRequest();
            xhttp.open("GET", "ajax/verificarUsuario.php?user=" + cadena, true);
            xhttp.send();
            xhttp.onreadystatechange=function (){
                if(xhttp.readyState===4 && xhttp.status===200){
                document.getElementById("mensaje").innerHTML=xhttp.responseText;           
                }
            }; 
            
        }  
        
    }
</script>