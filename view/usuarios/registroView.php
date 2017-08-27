
<h3>Registrate</h3>
<div id="registroContenedor"><p id="a"></p></div>
<form method="post" action="?c=usuario&a=registrar" onsubmit="return validacionFormularioRegistro()">
        <label for="idUsuario">Usuario:</label><br/>
        <input type="text" name="idUsuario" id="campoIdUsuario" onkeypress="validaSoloLetras()" onkeyup="registerLog()"
               placeholder="Usuario" required/><br/>
        <label for="nombreUsuario">Nombre:</label><br/>
        <input type="text" name="nombreUsuario" id="campoNombreUsuario" onkeypress="validaSoloLetras()"
               placeholder="Nombre" required/><br/>
        <label for="apellidoUsuario">Apellido:</label><br/>
        <input type="text" name="apellidoUsuario" id="campoApellidoUsuario" onkeypress="validaSoloLetras()"
               placeholder="Apellido" required/><br/>
        <label for="cedulaUsuario">Cedula:</label><br/>
        <input type="text" name="cedulaUsuario" id="campoCedulaUsuario" onkeypress="validaSoloNumeros()" maxlength="10"
               placeholder="1234567890" required/><br/>
        <label for="correo"> E-mail:</label><br/>
        <input type="email" name="correo" id="campoEmail" placeholder="email@example.com" required><br/>
        <label for="claveUsuario">Contraseña de usuario:</label><br/>
        <input type="password" name="claveUsuario" id="campoContrasenia" placeholder="Clave" required><br/>
        <label for="claveUsuario">Confirmar contraseña:</label><br/>
        <input type="password" name="claveUsuario" id="campoContrasenia2" placeholder="Clave" required><br/>
        <label for="radio">Genero:</label><br/>
        <input type="radio" name="genero" value="hombre" class="btRadio"><label>Masculino</label><br/>
        <input type="radio" name="genero" value="mujer" class="btRadio"><label>Femenino</label><br/>
        <input type="radio" name="genero" value="otro" class="btRadio"><label>Otro</label><br/>
        <label for="fechaNacimiento">Fecha de Nacimiento:</label><br/>
        <input type="date" name="fechaNacimiento" min="1930-01-01" max="2002-12-31" id="campoFechaNac"
                required><br/>
        <input type="submit" value="Registrar" name="botonRegistrar" class="botonForm" >
        <input type="reset" value="Limpiar" class="botonForm">
    </form>
    <script language="javascript">
    function registerLog(){
        var user = document.getElementById("campoIdUsuario").value;
        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", "ajax/registrarAjax.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("d=admin");
        xhttp.onreadystatechange=function (){
            if(xhttp.readyState===4 && xhttp.status===200){
                document.getElementById("registroContenedor").innerHTML=xhttp.responseText;           
            }
        }; 
    }
    </script>


