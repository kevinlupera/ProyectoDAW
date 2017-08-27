<?php
require_once ("../model/usuarios/usuarioModel.php");
$usuarioModel= new UsuarioModel();
$result= $usuarioModel->existeUsuario($usuario); 
$result=1;
if($result==1){
    $mensaje="<p>".$_POST['d']."Usuario existente, pruebe otro nombre de usuario.</p>";
}
echo $mensaje;
