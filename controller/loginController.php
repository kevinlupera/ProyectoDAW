<?php

require_once 'model/usuarios/usuarioModel.php';
 
class loginController{
     private $usuarioModel;
    function __construct() {
        $this->usuarioModel = new UsuarioModel();
        //$this->parametroModel= new ParametroModel();
    }
    //accion por defecto
    public function consultar(){
        require_once 'view/header.php';
        require_once 'view/usuarios/loginView.php';
        require_once 'view/footer.php';
    }   
    public function iniciar() {
        $usuario = new Usuario();
        if(isset(
            $_REQUEST['usuario']) && !empty($_REQUEST['usuario'])){
            $usuario= $this->usuarioModel->validarUsuario($_REQUEST['usuario'],$_REQUEST['clave']);   
            if(isset($usuario)&&!empty($usuario)){
                setcookie("cook", $usuario->getUsuario(),time()+(60*60*4));
                $_SESSION['usuario']=$usuario->getUsuario();
                $_SESSION['usuario_id']=$usuario->getUsuario_id();
                $_SESSION['tipo']=$usuario->getTipo();
            }
            else{
                header("Location:index.php");
            }    
        }
        require_once 'view/header.php';
        require_once 'view/cesta/cestaView.php';
        require_once 'view/footer.php';
    }
    
     public function salir() {
         //salir
            session_start();
            //elimanr variables almacendas
            session_unset();
            //eliminar/destruir sesion
            session_destroy();
            header("Location:index.php");
     }
}


    


