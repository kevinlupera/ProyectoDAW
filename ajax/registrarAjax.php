<?php
$usuario=$_POST['user'];
require 'model/usuarios/usuarioModel.php';
$usuarioModel= new UsuarioModel();
$result= $usuarioModel->existeUsuario($usuario); 
$mensaje="Usuario registrado exitosamente";
$result=1;
if($result==1){
    $mensaje="Usuario existente, pruebe otro nombre de usuario.";
}
echo '<script language="javascript">'
. 'alert("'.$mensaje.'");'
        . '</script>';
echo '
    <div style="background: none repeat scroll 0 0 #FFFFFF;
        border: 1px solid #DDDDDD;
        border-radius: 6px 6px 6px 6px;
        bottom: 50px;
        left: auto;
        margin-left: -120px;
        padding: 10px 0 0;
        position: fixed;
        text-align: center;
        width: 90px;
        z-index: 15;"> 
            </h2>'.$mensaje.'</h2>
    </div>
    ';



