<?php

require_once 'model/usuarios/usuarioModel.php';
require_once 'model/productos/productoModel.php';
 
class loginController{
     private $usuarioModel;
    function __construct() {
        $this->usuarioModel = new UsuarioModel();
        $this->productoModel = new productoModel();
    }
    //accion por defecto
    public function consultar(){
        require_once 'view/header.php';
        require_once 'view/usuarios/loginView.php';
        require_once 'view/footer.php';
    }   
    public function iniciar() {
        $this->productos=$this->productoModel->obtenerProductos();
        $usuario = new Usuario();
        if(isset(
            $_REQUEST['usuario']) && !empty($_REQUEST['usuario'])){
            $usuario= $this->usuarioModel->validarUsuario($_REQUEST['usuario'],$_REQUEST['clave']);   
            if((isset($usuario)&& !empty($usuario)) && $usuario->getUsu_estado()==0){
                $persona= $this->usuarioModel->buscarPersonaxId($usuario->getPersona_id());
                setcookie("cook", $persona->getNombre(),time()+(60*60*4));
                $_SESSION['usuario']=$persona->getNombre();
                $_SESSION['usuario_id']=$usuario->getUsuario_id();
                $_SESSION['tipo']=$usuario->getTipo();
                $_SESSION['persona_id']=$usuario->getPersona_id();
            }
            else{
                header("Location:index.php");
            }    
        }
        require_once 'view/header.php';
        require_once 'view/productos/productosView.php';
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


    


