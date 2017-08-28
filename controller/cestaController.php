<?php
//include("/modelo/Usuario.php");
require_once 'model/ordenes/ordenesModel.php';
require_once 'model/productos/productoModel.php';
require_once 'model/usuarios/personaModel.php';
require_once 'model/usuarios/usuarioModel.php';
class cestaController{
    private $ordenesModel;
    private $productoModel;
    private $personaModel;
    private $usuarioModel;
    private $ordenes;
    
    function __construct() {
        if(isset($_SESSION['usuario']) && $_SESSION['tipo']>=1){
        $this->ordenesModel = new ordenesModel();
        $this->productoModel=new productoModel();
        $this->personaModel=new PersonaModel();
        $this->usuarioModel=new UsuarioModel();
        }else{
            header("Location:index.php");
        }
    }
    //accion por defecto
    public function consultar(){
        $usuario_id=$_SESSION['usuario_id'];
        $this->ordenes= $this->ordenesModel->obtenerOrdenesxUsuario($usuario_id);
        require_once 'view/header.php';
        require_once 'view/cesta/cestaView.php';
        require_once 'view/footer.php';
    }
    
    public function getOrdenxUser(){
        $usuario_id=$_SESSION['usuario_id'];
        $this->ordenes= $this->ordenesModel->obtenerOrdenesxUsuario($usuario_id);
        require_once 'view/header.php';
        require_once 'view/cesta/cestaView.php';
        require_once 'view/footer.php';
    }
    
    public function deleteOrden(){
        if(isset($_POST['del'])){
            $idorden=$_POST['idordenc'];
            $this->ordenes= $this->ordenesModel->deleteOrden($idorden);
            $this->getOrdenxUser();
        }
    }
    
    public function pagarOrden(){
        if(isset($_POST['paid'])){
            $idorden=$_POST['ordenPagar'];
            $usuario_id=$_SESSION['usuario_id'];
            $fecha= date("Y-n-j");
            $orden= $this->ordenesModel->obtenerOrdenexId($idorden);
            $usuario= $this->usuarioModel->buscarUsuarioxId($usuario_id);  
            $persona= $this->personaModel->buscarPersonaxId($usuario->getPersona_id());
            
            if(isset($orden)&&isset($persona)){
                $resp=$this->ordenesModel->pagarOrden($persona->getPersona_id(), $fecha, $orden); 
                if($resp!=NULL){
                    $this->ordenesModel->deleteOrden($idorden);
                }
            }
           
            
            
            $this->getOrdenxUser();
        }
    }
    
    
}
    


